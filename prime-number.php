<?php
/*
 * 	A man has to buy 7 floors in a building. Numbered floor 1 to 68.
 *  Conditions:
	 * 1. He cannot buy floors with prime number.
	 * 2. He cannot buy floor number containing prime digit.
	 * 3. Floor number 1 is reserved for services.
 * How many floors are legal?
 *
 * Author: Kierra Palmer
 * Date: May 7, 2019*/

//All Primes:2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67
//Valid Floors: 4 6 8 9 10 14 16 18 40 44 46 48 49 60 64 66 68

	$totalFloors = 68;
	$validFloors = 0;

	echo 'Valid Floor Numbers: ';

	//Note: Floor 1 is reserved for services and is not a valid floor
	for($floor = 2; $floor <= $totalFloors; $floor++){
		$increamentFloor = true;

		//If full number is a prime then do not increment floor count
		if(isPrime($floor)) {
			$increamentFloor = false;
		}

		//If number has two digits and either of those digits are a prime then do not increment floor count
		if($floor>9) {
			$splitNumber = str_split($floor);
			foreach ($splitNumber as $k) {
				if (isPrime($k)) {
					$increamentFloor = false;
					break;
				}
			}
		}

		if($increamentFloor) {
			echo $floor . ', ';
			$validFloors++;
		}

	}

	echo '<br/> Number of Valid Floors: ' . $validFloors . '<br/>';


	//Check if a number is prime
	function isPrime($key){
		//By the definition of prime, 0 and 1 are not prime
		if($key == 0 || $key == 1)
			return false;

		for ($i = 2; $i <= $key/2; $i++){
			//if floor is evenly divisible by any number then it is not prime
			if ($key%$i == 0)
				return false;
		}
		return true;
	}