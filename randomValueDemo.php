<?php
/*
*		PHPRandomValue Usage Examples
*		By Evan Francis, 2014
*		
*/
include_once( 'randomValue.php' );

//create new random value object
$randomValue = new RandomValue;

//get random values object
echo "randomValue->randomNumber(): ".$randomValue->randomNumber()."<br>";
echo "randomValue->randomNumberBetween(1,10): ".$randomValue->randomNumberBetween(1,10)."<br>";
echo "randomValue->randomTextString(): ".$randomValue->randomTextString()."<br>";
echo "randomValue->randomTextString(10): ".$randomValue->randomTextString(10)."<br>";
echo "randomValue->randomKey(): ".$randomValue->randomKey()."<br>";
echo "randomValue->randomKey(10): ".$randomValue->randomKey(10)."<br>";


?>