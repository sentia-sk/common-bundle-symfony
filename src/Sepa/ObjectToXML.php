<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use DOMDocument;
use DOMElement;
use DOMException;
use ReflectionClass;
use ReflectionException;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\Document;

class ObjectToXML
{
    private DOMDocument $dom;

    public function __construct(Document $documentType)
    {
        $this->dom = new DOMDocument("1.0", "UTF8");
        $reflObj = new ReflectionClass($documentType);
        $root = $this->dom->createElementNS('urn:iso:std:iso:20022:tech:xsd:pain.001.001.05', $reflObj->getShortName());
        $root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $root->setAttribute('xsi:schemaLocation', 'urn:iso:std:iso:20022:tech:xsd:pain.001.001.05 pain.001.001.05.xsd');

        $parent = $reflObj->getParentClass();
        $properties = $parent ? $parent->getProperties() : [];

        $this->createNodeAndAppendChild($properties, $root, $documentType);
        $this->dom->appendChild($root);
    }

    /**
     * @throws DOMException
     * @throws ReflectionException
     */
    private function createNode(string $key, mixed $value): DOMElement|null
    {
        $node = null;
        if (is_string($value) || is_numeric($value) || is_bool($value)) {
//            if ($value === null) {
//                $node = $this->dom->createElement($key);
//            } else {
            $node = $this->dom->createElement(ucfirst($key), (string)$value);
//            }
        } elseif ($value instanceof DateTime) {
            $node = $this->dom->createElement(
                ucfirst($key),
                $value->format($key === 'reqdExctnDt' ? "Y-m-d" : "Y-m-d\TH:i:s.u")
            );
        } elseif ($value instanceof ActiveOrHistoricCurrencyAndAmountType) {
            $node = $this->dom->createElement(ucfirst($key), (string)$value->value());
            $node->setAttribute('Ccy', $value->getCcy());
        } elseif (is_array($value)) {
            //recursive
            foreach ($value as $obj) {
                $node = $this->createNode($key, $obj);
            }
        } elseif ($value !== null) {
            $node = $this->dom->createElement(ucfirst($key));
            $reflObj = new ReflectionClass($value);
            $this->createNodeAndAppendChild(
                $reflObj->getProperties(),
                $node,
                $value
            );
        }

        return $node;
    }

    private function createNodeAndAppendChild(
        array $properties,
        DOMElement $parentNode,
        mixed $document
    ): void {
        foreach ($properties as $property) {
            $property->setAccessible(true);
            $key = $property->getName();
            $value = $property->getValue($document);

            if (is_array($value)) {
                foreach ($value as $subObj) {
                    $childNode = $this->createNode($key, $subObj);
                    if ($childNode) {
                        $parentNode->appendChild($childNode);
                    }
                }
            } else {
                $childNode = $this->createNode($key, $value);
                if ($childNode) {
                    $parentNode->appendChild($childNode);
                }
            }
        }
    }

    public function __toString(): string
    {
        return $this->dom->saveXML() ?: '';
    }
}