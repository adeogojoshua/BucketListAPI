# BucketListAPI
A Restful API for a bucket list service

## Setup Virtual host
```
127.0.0.1      bucketlist.api

<VirtualHost *:80>
	DocumentRoot "path_to_app_public_folder"
	ServerName bucketlist.api
	<Directory "path_to_app_public_folder">
		Require all granted
		AllowOverride All
	</Directory>
</VirtualHost>
```

``` javascript
npm install
```

``` php
composer install
```
