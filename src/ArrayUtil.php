<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony;

use Exception;

class ArrayUtil
{

    /**
     * najprv sa pokusi zavolat $item->getMemberName() a ked sa nepodari, tak $item->memberName
     */
    public function getMemberValuesFromObjects(array $objects, string $memberName): array
    {
        $ret = [];
        $method = "get" . ucwords($memberName);
        foreach ($objects as $object) {
            try {
                $value = $object->$method();
            } catch (Exception) {
                $value = $object->$memberName;
            }
            $ret[] = $value;
        }
        return $ret;
    }

    public function getKeyToObjectFromObjects(array $objects, string $keyMember): array
    {
        $ret = [];
        $methodKey = "get" . ucwords($keyMember);
        foreach ($objects as $object) {
            try {
                $key = $object->$methodKey();
            } catch (Exception) {
                $key = $object->$keyMember;
            }
            $ret[$key] = $object;
        }
        return $ret;
    }
}
