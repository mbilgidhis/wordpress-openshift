# Wordpress on Openshift 
This is an example of template for deploying Wordpress v5.2.6 on Openshift v3.9. Using persistent storage on MySQL 5.6 and PHP 5.6.

##### Editing Wordpress Code
You need to add and change wp-config.php database configuration like below to get environment variable from container.
```php
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );
```
So I use Persistent Volume on `uploads` folder only because this folder will be the only folder needs persistent storage. Create new constant value for Wordpress
```php
define('UPLOADS', 'pv-uploads')
```
And please make sure that the value is the same with [this](https://github.com/mbilgidhis/wordpress-openshift/blob/f54e70f7dc656a517239de0cdf0acae64a055a9a/wordpress-mysql-persistent-template.yaml#L173) line. Container root folder is `/opt/app-root/src`, so you can change the folder name if you want.
