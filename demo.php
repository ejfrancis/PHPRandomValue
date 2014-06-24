<?php
/*
*		PHPRandomValue Usage Examples
*		By Evan Francis, 2014
*		
*/
//require file
require_once( 'RandomValue.php' );

//create new random value object
$randomValue = new ejfrancis\RandomValue;

//get random values object
echo "randomValue->randomNumber(): ".$randomValue->randomNumber()."<br>";
echo "randomValue->randomNumberBetween(1,10): ".$randomValue->randomNumberBetween(1,10)."<br>";
echo "randomValue->randomTextString(): ".$randomValue->randomTextString()."<br>";
echo "randomValue->randomTextString(10): ".$randomValue->randomTextString(10)."<br>";
echo "randomValue->randomKey(): ".$randomValue->randomKey()."<br>";
echo "randomValue->randomKey(10): ".$randomValue->randomKey(10)."<br>";
echo "randomValue->randomStrongerKey(): ".$randomValue->randomStrongerKey()."<br>";
echo "randomValue->randomStrongerKey(15): ".$randomValue->randomStrongerKey(15)."<br>";



?>