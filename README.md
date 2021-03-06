# Prestashop on docker-compose

Bootstrap a Prestashop development environmemt with phpmyadmin based on  [PrestaShop/docker](https://github.com/PrestaShop/docker).

The docker-compose will boot and link 3 docker containers.

1.  Prestashop v1.7.2.2 exposed on port 3080  (access localhost:3080)
2.  phpmyadmin v 4.7.4 exposed on port 3081 (access localhost:3081)
3.  mariadb v10.2.8 on internal docker network (not exposed to external port)

## How to use it

1.  Ensure Docker toolbox is setup on your machine

2.  git clone this repository into your project folder
```
create the default paymentsandbox_ps project directory:

git clone https://github.com/rjpalermo1/paymentsandbox_ps.git

-or-

create a custom <name> project directory:

git clone https://github.com/rjpalermo1/paymentsandbox_ps.git <name>

```

> NOTE:  When you git clone a hidden .git file will be added to the project root folder that links to the git repository you just pulled the code from.  If you will be setting up a custom shop and making this image your own then you should remove this hidden `.git` folder and `git init` to your own repository.

3.  Go into your project root folder `/docker/mariadb` and rename `import.sql.bak` to `import.sql`

4.  From your project root folder, run docker-compose

```
docker-compose up -d
```

This will spin up the docker environment and provide a basic Payment Sandbox Prestashop store at localhost:3080.  If you haven't spun up this environment already docker will need to pull the server images from the Internet and this can take a few minutes.  If you already have the server images installed this should only take a few seconds.

**ADMIN LOGIN AT localhost:3080/admin
* Admin Login username:  admin@example.com
* Admin Login password: password

**CUSTOMER LOGIN AT localhost:3080
* Customer Login username: customer@example.com
* Customer Login password: password

## Customizing and Saving Prestashop installations

**NOTE THE PAYMENT SANDBOX PRESTASHOP BASE IMAGE IS FOR DEVELOPMENT AND DEMONSTRATION ONLY.  IT IS NOT CONFIGURED FOR A PRODUCTION ENVIRONMENT**

You can use this base image to create a new Prestashop that with custom data and configuration for development and save it as it's own docker-compose setup.

# Use phpmyadmin

1.  Open the phpadminclient at your specified host:port in the docker-compose.yml (default localhost:3081)

2.  Select the prestashop database name specified in the docker-compose.yml (default prestashop) in the left column

3.  Select `Export` from the header menu above the database table names

4.  Select `Quick` as an export method

5.  Select `SQL` as the export format

6.  Press `GO` and save the file in the project as `/docker/mariadb/<name>.mysql`.

You now have a save the Prestashop configuration 'as is'.  You can upload this setup to a new repository, zip it and move it to a different server or keep it in the existing server in a new folder or keep it where you have it.

When you want to launch this new Prestashop docker configuration go to the root of your project folder and in `docker\mariadb` rename the mysql export file you saved as `import.sql`.

If you need to change the exposed Docker ports serving Prestashop and phpmyadmin then in the docker-compose file go under each 'service' and change the local port number to your preference.  For example, the base image serves Prestashop on <dockerhost>:3080 (ie localhost:3080).  To serve Prestashop on port <dockerhost>:4444 go into docker-compose.yml and change the exposed por in the service.  The port configuration ooks like this <exposed port>:<docker port>.

```
services:
  prestashop:
    build: ./docker/prestashop
    ports:
      - `4444`:80

```

# Helpful links about PrestaShop:

* User Guide: http://doc.prestashop.com/display/PS17/User+Guide
* Tech docs (modules & themes): http://developers.prestashop.com/
* Official blog: https://www.prestashop.com/blog/en/
* Devteam blog: http://build.prestashop.com/
* Get community support: http://www.prestashop.com/forums/
* Get paid support: https://www.prestashop.com/en/support
* Find modules and themes: http://addons.prestashop.com/
* Contribute with code: https://github.com/PrestaShop/PrestaShop
* Contribute with translation: http://crowdin.net/project/prestashop-official


### Use this configuration for development/testing, not production