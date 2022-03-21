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
    'PrimeTrust' => \BsiOrg\PrimeTrust\PrimeTrust::class,
    ...
]
```

## Usage

### Setup

You need to set environment variables to run the primetrust sdk.

```dotenv
PRIMETRUST_URL=
PRIMETRUST_USER=
PRIMETRUST_PASS=
```

You can use the whole library with facade like so:

```php
use BsiOrg\PrimeTrust\Facades\PrimeTrust;

$pt = PrimeTrust::account()->all();
```

### Resources

This sdk at that moment support all the resources of primetrust, and you can use any resource after the `PrimeTrust::`

```php
PrimeTrust::resource('accounts')->all();
PrimeTrust::accounts()->all();
PrimeTrust::contracts()->all();
PrimeTrust::amlChecks()->all();
PrimeTrust::accountCashTotals ()->all();
```

### Filters

Heavily inspired by Larvael so all the filters with beautiful, expressive syntax are available in this sdk.

```php
PrimeTrust::accounts()
    ->with('contacts')
    ->with('account-cash-totals')
    ->where('name', 'sw', 'Rizi')
    ->latest()
    ->limit(5)
    ->get();
```

#### ->with($resource)

It basically includes any allowed resources available with main resource, in result to get both result in one call.

You can include multiple resources with just method chaining.

#### ->where($key, $operator, $value)

You can filter down your results with the help of all the available operators such as:

- `eq`: Equals (exact match). Used when no operator is specified.
- `gt`: Greater than.
- `gte`: Greater than or equal to.
- `in`: Any item is an exact match. Takes special syntax, so if you wanted something where a status was one of a few,
  you would pass ?filter[status in]=pending,processing.
- `like`: Case insensitive search. Does NOT support wildcards as of right now.
- `lt`: Less than.
- `lte`: Less than or equal to.
- `neq`: NOT equal.
- `nin`: NOT in.
- `nlike`: NOT like.
- `sw`: Starts with. Look for strings that being with filter value. Case insensitive.

#### ->orderBy($column, $order = asc|desc)

You can sort the api request by any column which supported in primetrust api with the help of `orderBy`, `orderByAsc`
, `orderByDesc`, `latest()` and `oldest()`.

#### ->limit($pageSize, $pageNumber)

You can narrow down your result to your desire amount or can skip the results and directly go to your desire page.

## Author

Mubashir Rasool Razvi (@rizimore)  
rizimore@outlook.com
