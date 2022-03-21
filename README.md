# PrimeTrust Client for Laravel
A api client implementation in laravel of [primetrust](https://primetrust.com) api.

## Install

#### Install via Composer  
```
composer require bsiorg/primetrust-client-laravel
```

Utilities autoloading in Laravel 5.5+. For older versions add the following lines to your `config/app.php`

```php
'providers' => [
    ...
    \BsiOrg\PrimeTrust\PrimeTrustServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'PrimeTrustClient' => \BsiOrg\PrimeTrust\PrimeTrust::class,
    ...
]
```

## Author
Mubashir Rasool Razvi (@rizimore)  
rizimore@outlook.com
