PHPRandomValue
==============

PHPRandomValue is a PHP class for generating random values including numbers, text strings, and keys
originally developed for use within the [AlpineAuth](https://github.com/ejfrancis/AlpineAuth) library.

Random numbers are generated using mcrypt_create_iv(4, MCRYPT_DEV_URANDOM). Random text
strings and keys (including letters and characters) are created by choosing characters at 
random using the number generator. 


###Example Usage and Output
include_once( 'randomValue.php' );

$randomValue = new RandomValue;

$randomValue->randomNumber(): -3880998
$randomValue->randomNumberBetween(1,10): 2
$randomValue->randomTextString(): CfCkKDHRgUULdGWcSqP4
$randomValue->randomTextString(10): LorPIxaeEY
$randomValue->randomKey(): C7al8tX9.gqYLf2ImVt/!$NOY79T5sNCT/6Q.$!.6Gf/Q5zpa3
$randomValue->randomKey(10): RDV.dc6Ai/