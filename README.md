# Prestashop on docker-compose

Bootstrap a Prestashop development environmemt with phpmyadmin based on  [PrestaShop/docker](https://github.com/PrestaShop/docker).

The docker-compose will boot and link 3 docker containers.

1.  Prestashop v1.7.2.2 exposed on port 3080  (access localhost:3080)
2.  phpmyadmin v 4.7.4 exposed on port 3081 (access localhost:3081)
3.  mariadb v10.2.8 on internal docker network (not exposed to external port)

## How to use it




## Customized Prestashop installations

If you use this base image to create a new Prestashop that is set up with your custom data and configuration it can be saved as it's own stand-alone configuration be following these steps

# Using phpmyadmin

1.  Open the phpadminclient at your specified host:port (default localhost:3081)

2.  Select the prestashop database name specified in the docker-compose.yml (default prestashop) in the left column

3.  Select `Export` from the header menu above the database table names

4.  Select `Quick` as an export method

5.  Select `SQL` as the export format

6.  Press `GO` and save the file in the project as `/docker/mariadb/import.sql`.  By default the 'save as' will try to save it as `import.mysql` so make sure you type out `import.sql` in the save as box and select `YES` to overwrite the existing file.

You now have a save the Prestashop configuration 'as is'.  You can upload this setup to a new repository, zip it an dmove it to a different server or keep it in the existing server in a new folder or keep it where you have it.

When you want to launch this new Prestashop docker configuration go to the root of the folder, change any environment settings (detialed above) and run `docker-compose up -d`


# Using Prestashop interface

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