# Prestashop on docker-compose

Bootstrap a Prestashop development environmemt with phpmyadmin based on  [PrestaShop/docker](https://github.com/PrestaShop/docker).

The docker-compose will boot and link 3 docker containers.

1.  Prestashop v1.7.2.2 exposed on port 3080  (access localhost:3080)
2.  phpmyadmin v 4.7.4 exposed on port 3081 (access localhost:3081)
3.  mariadb v10.2.8 on internal docker network (not exposed to external port)

## How to use it




## Customized Prestashop installations

If you use this base image to create a new Prestashop that is set up with your custom data and configuration it can be saved as it's own stand-alone configuration be following these steps

1.  In the Prestashop admin interface, backup the entire database.

For running an existing running website, export your database to a SQL file and paste it in `docker/mariadb/import.sql`. It will be imported to MariaDB when creating the container.

The prestashop image is customized to include Xdebug, higher limits, etc. You can customize the Dockerfile, run `docker-compose build prestashop` and `docker-compose up`.


Helpful links about PrestaShop:

* User Guide: http://doc.prestashop.com/display/PS17/User+Guide
* Tech docs (modules & themes): http://developers.prestashop.com/
* Official blog: https://www.prestashop.com/blog/en/
* Devteam blog: http://build.prestashop.com/
* Get community support: http://www.prestashop.com/forums/
* Get paid support: https://www.prestashop.com/en/support
* Find modules and themes: http://addons.prestashop.com/
* Contribute with code: https://github.com/PrestaShop/PrestaShop
* Contribute with translation: http://crowdin.net/project/prestashop-official


#### src/config/settings.inc.php
```php
<?php
define('_DB_SERVER_',         getenv('DB_SERVER'));
define('_DB_NAME_',           getenv('DB_NAME'));
define('_DB_USER_',           getenv('DB_USER'));
define('_DB_PASSWD_',         getenv('DB_PASSWD'));
```

### Use this configuration for development/testing, not production