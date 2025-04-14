## For laravel Migrations and Data World Countries States and Cities

Migrations create five tables and seed the data

- Regions (6 records)
- Subregions (22 records)
- Countries (250 records)
- States (5 084 records)
- Cities (150 073 records)

## Software

```shell
cat /etc/os-release
NAME="Linux Mint"
VERSION="22.1 (Xia)"
ID=linuxmint
ID_LIKE="ubuntu debian"
PRETTY_NAME="Linux Mint 22.1"
VERSION_ID="22.1"
HOME_URL="https://www.linuxmint.com/"
VERSION_CODENAME=xia
UBUNTU_CODENAME=noble
```
```php
php --version
PHP 8.4.5 (cli) (built: Mar 13 2025 15:36:20) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.4.5, Copyright (c) Zend Technologies
    with Zend OPcache v8.4.5, Copyright (c), by Zend Technologies
    with Xdebug v3.4.2, Copyright (c) 2002-2025, by Derick Rethans
```
```php
mysql --version
mysql  Ver 8.0.41-0ubuntu0.24.04.1 for Linux on x86_64 ((Ubuntu))
```
```php
laravel --version
Laravel Installer 5.14.1
```

Add folders  migrations and seeder to Laravel project to folder database
The Models folder contains all dependencies to the table (Relationship).

```shell
php artisan migrate --seed
```

The Repository name (Sity) deliberately contains a misspelling of the word City

