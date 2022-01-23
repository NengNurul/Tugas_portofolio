# Step By Step
First time make sure you have been clone your project in git ;
```
git clone http:.... ( copy in your project github )
```

## Tools


### Install Laragon
```
https://github.com/leokhoa/laragon/releases/download/5.0.0/laragon-wamp.exe
```


### Download Composer
```
https://getcomposer.org/Composer-Setup.exe
```


### Download HeidiSql
```
https://www.heidisql.com/installers/HeidiSQL_11.3.0.6295_Setup.exe
```



### Upgrade to Php7.4
-First Download Package php 7.4 in 
```
https://windows.php.net/downloads/releases/php-7.4.27-Win32-vc15-x64.zip
```

-step by step follow link : https://medium.com/@stephenjudeso/upgrading-to-php-7-4-laragon-862b9d204d0c
-move file php7.4 has your download to your root laragon project/bin/php
-and then extract file ,
-open laragon software 
-click menu
-click opsi php 
-and then change to php version while you want

## step running your app
### update & install composer in root project`
```
    composer install
```

or

```
composer update
```

### Open Laragon


### Manage file Env
-create .env file
-copy env file to .env
-changed  Base Url, Host, Username, and password database in .env
```
app.baseURL = 'http://localhost:9091';

database.default.hostname = localhost

database.default.database = password_manager

database.default.username = root

database.default.password = 

```

-open database & create database your matching with setting .env
-Migrate Database
```
php spark migrate
```

## running your app
```
php spark serve --port  9091
```



## push your changed file in your git
