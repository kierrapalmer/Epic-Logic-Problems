
<?php
/*
Sword Circle Problem
100 people stand in a circle in order 1 to 100. No. 1 has a sword.
He kills the next person (i.e. No. 2) and gives the sword to the next
living person (i.e. No. 3).
All people do the same until only 1 survives. Which number survives to the end?
Author: Kierra Palmer
*/

//Whether to use associate array
//Realized that I could use just get delete value from array instead of marking it as false
//upgraded to php version 7.3 to take advantage of array_key_last which allowed me to get last key without moving pointer position

getSurvivor();

	function getSurvivor() {
		$circle = array_fill(1, 100, true);

		while(true) {
			//print_survivors($circle, key($circle));

			//Print out answer if there is only one item left in circle
			if(count($circle) == 1){
				echo key($circle);
				break;
			}

			//If at last element in array, move pointer to beginning of array and delete first item
			//Else move to next element and delete
			if(key($circle) == array_key_last($circle)){
				reset($circle);
				unset($circle[key($circle)]);
			}
			else {
				next($circle);
				//If the next value is the last value in the array, delete element and reset pointer to beginning of array
				//Else just delete element
				if(key($circle) == array_key_last($circle)){
					unset($circle[key($circle)]);
					reset($circle);
				}
				else
					unset($circle[key($circle)]);
			}
		}
	}

	//Print Tracking of each survivor, with red number indicating who has sword
	function print_survivors($circle, $swordPos){
		foreach($circle as $key=>$value){
			if($key == $swordPos)
				echo '<span style="color:red">' . $key . '</span> ';
			else
				echo '<span style="color:navy">' . $key . '</span> ';

		}
		echo '</br> </br>';
	}



