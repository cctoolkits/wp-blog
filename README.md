wp-blog
=======

1 - Clone repository
2 - Install composer
3 - Execute composer
$ composer install
4 - Create apache vhost
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

5 - Create database
6 - Config wp-config.php (urls & db)
7 - Import database
