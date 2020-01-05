# BucketListAPI
A Restful API for a bucket list service

## Setup Virtual host
```
127.0.0.1      bucketlist.api

<VirtualHost *:80>
	DocumentRoot "C:\Users\webmaster\Desktop\Adeogo\BucketListAPI\public"
	ServerName bucketlist.api
	<Directory "C:\Users\webmaster\Desktop\Adeogo\BucketListAPI\public">
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
