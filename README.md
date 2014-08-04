wp-blog
=======
Description here

Installation
------------

### Clone repository

### Install composer from [here](http://getcomposer.org/ "Composer") or run this command
    curl -s https://getcomposer.org/installer | php

### Run composer install
    composer install

### Create Apache VirtualHost
    <VirtualHost *:80>
        ServerName cctoolkits.com
        DocumentRoot "/path/to/cctoolkits/www/"
        <Directory "/path/to/cctoolkits/www/">
            Options Indexes Includes FollowSymLinks  
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

### Create database

### Configure database connection and url parameters in www/wp-config.php
    define('WP_HOME','http://www.cctoolkits.com/');
    define('WP_SITEURL','http://www.cctoolkits.com/');

    define('DB_NAME', 'database_name_here');
    define('DB_USER', 'username_here');
    define('DB_PASSWORD', 'password_here');
    define('DB_HOST', 'localhost');

### Import database