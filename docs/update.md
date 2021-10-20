# How to update to the latest version?

- Backup your settings - config/file-manager.php
- Will be better if you delete configuration file from "config" folder before updating
- download a new version

```
composer update alish/file-manager
```

- Update config file and assets(js)

```
// config
php artisan vendor:publish --tag=alishfm-config --force
// js, css
php artisan vendor:publish --tag=alishfm-assets --force
```

- set your settings in to the config/file-manager.php
- if you implementing "ConfigRepository" and you see a new settings in 
the config file - don't forget to add new functions in to your class

