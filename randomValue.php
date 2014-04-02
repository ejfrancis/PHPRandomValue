<?php
/*
*		Class to produce unique values
*		By Evan Francis, 2014
*		
*/
class RandomValue{
	//get a random number
	public function randomNumber(){
		$min  = -9999999;
		$max = 9999999;
		$diff = $max - $min;
		if ($diff < 0 || $diff > 0x7FFFFFFF) {
		throw new RuntimeException("Bad range");
		}
		$bytes = mcrypt_create_iv(4, MCRYPT_DEV_URANDOM);
		if ($bytes === false || strlen($bytes) != 4) {
			throw new RuntimeException("Unable to get 4 bytes");
		}
		$ary = unpack("Nint", $bytes);
		$val = $ary['int'] & 0x7FFFFFFF;   // 32-bit safe                           
		$fp = (float) $val / 2147483647.0; // convert to [0,1]                          
		return round($fp * $diff) + $min;

	}
	//get a random number between two values
	public function randomNumberBetween($min,$max){
		$diff = $max - $min;
		if ($diff < 0 || $diff > 0x7FFFFFFF) {
		throw new RuntimeException("Bad range");
		}
		$bytes = mcrypt_create_iv(4, MCRYPT_DEV_URANDOM);
		if ($bytes === false || strlen($bytes) != 4) {
			throw new RuntimeException("Unable to get 4 bytes");
		}
		$ary = unpack("Nint", $bytes);
		$val = $ary['int'] & 0x7FFFFFFF;   // 32-bit safe                           
		$fp = (float) $val / 2147483647.0; // convert to [0,1]                          
		return round($fp * $diff) + $min;
	}
	
	//get a random string
	public function randomTextString($length = 20){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[$this->randomNumberBetween(0,strlen($characters)-1)];
		}
		return $randomString;
	}
	
	//get a random key (combination of text and special character)
	public function randomKey($length = 50){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$./!$./!$./!$./';
		$randomKey = '';
		for ($i = 0; $i < $length; $i++) {
			$randomKey .= $characters[$this->randomNumberBetween(0,strlen($characters)-1)];
		}
		
		return $randomKey;
	}
	
	
}

?>