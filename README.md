# common-bundle-symfony

### What is this repository for? ###
- common features for sentia applications
    - Synology
    - Slack

### Requirements ###
- PHP: 8.1.X
- Symfony: 6.2.X

### Config ###
Required parameters in the application's `config/services.yaml` per feature:
- For Synology utils: `synology_base_url`, `synology_username`, `synology_password`
- For Slack utils: `app_env`

    