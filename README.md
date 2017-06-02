# PHPRandomValue

PHPRandomValue is a PHP class for generating random values including numbers, text strings, and keys
originally developed for use within the [AlpineAuth](https://github.com/ejfrancis/AlpineAuth) library.

Random numbers are generated using mcrypt_create_iv(4, MCRYPT_DEV_URANDOM). Random text
strings and keys (including letters and characters) are created by choosing characters at 
random using the number generator. 

## Installation
The recommended way to install is using composer, with the following require:

`"ejfrancis/php-random-value": "dev-master"`

You can also download the classfile `RandomValue.php` and include it manually.

### Example Usage and Output
```php
include_once( 'RandomValue.php' );

$randomValue = new ejfrancis\RandomValue;

$randomValue->randomNumber(): //-3880998

$randomValue->randomNumberBetween(1,10): //2

$randomValue->randomTextString(): //CfCkKDHRgUULdGWcSqP4

$randomValue->randomTextString(10): //LorPIxaeEY

$randomValue->randomKey(): //C7al8tX9.gqYLf2ImVt/!$NOY79T5sNCT/6Q.$!.6Gf/Q5zpa3

$randomValue->randomKey(10): //RDV.dc6Ai/

$randomValue->randomStrongerKey(): //{I}s3897:}$xz4R@hpd!_+1L13[:_%1::pv/-asp2%4^#5$iG$F:{_Jf5s-98]raaqrhZ*Jg2k-nT-{9nBxsl!^dFI&21f"V:mU3

$randomValue->randomStrongerKey(15): //q:]qf941l[D&s8A
```
