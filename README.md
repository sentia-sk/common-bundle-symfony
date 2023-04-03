# common-bundle-symfony

### What is this repository for? ###
- common features for sentia applications
    - Synology/Amazon Storage
    - Slack

### Requirements ###
- PHP: 8.1.X
- Symfony: 6.2.X

### Config ###
Required parameters in the application's `config/services.yaml` per feature:
- For Synology Service utils: `synology_base_url`, `synology_username`, `synology_password`
- For Amazon Storage Service utils: `amazon_s3_key`, `amazon_s3_secret`, `amazon_s3_region`, `amazon_s3_test_bucket`, `amazon_s3_prod_bucket`, `amazon_s3_version`
- For Slack utils: `app_env`

    