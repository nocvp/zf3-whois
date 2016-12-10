Zf3 Whois Query
============================
This module uses the [phois/whois](https://github.com/regru/php-whois "Phois/Whois Package")


Installation
------------
For the installation uses composer [composer](http://getcomposer.org "composer - package manager").
Add this project in your composer.json:


    "require": {
        "nocvp/zf3-whois": "dev-master"
    }


Examples
=====================================
Default use of Zf3 Whois
------------
```php
$whoisService = $container->get('Zf3Whois');
$whois = $whoisService->query('example.org');

echo $whois->info();
echo $whois->isAvailable() ? 'available' : 'not available';

or in your controller

$whois = $this->whois('example.org');
echo $whois->info();
echo $whois->isAvailable() ? 'available' : 'not available';
```


Contributors
=====================================

Semih SARI - semih.sari@noc.com.tr