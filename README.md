# common-bundle-symfony

### What is this repository for? ###
- common features for sentia applications
    - File storage (Synology, AmazonS3)
    - Slack

### Requirements ###
- PHP: 8.1.X
- Symfony: 6.2.X

### Config ###
Required parameters in the application's `config/services.yaml` per feature:
- For Synology Service utils: `synology_base_url`, `synology_username`, `synology_password`
- For AmazonS3 Service utils: `aws_access_key`, `aws_secret_key`, `aws_region`
- For Slack utils: `app_env`
