<?php
/**
 * You have 100 doors to be painted and 2 painters.
 * 1 starts at one end and paints every other door.
 * The other painter starts at the other end and paints every 3rd door.
 *
 * What door number will they meet at?
 *
 * Author: Kierra Palmer
 * Date: May 7, 2019*/

$painter1 = [];
$painter2 = [];

//Paint every other door, starting at 1
echo 'Painter 1\'s Doors: ';
for($p1=1; $p1<=100; $p1+=2){
	array_push($painter1, $p1);
	echo $p1 . ' ';
}
echo '<br />';


//Paint every third door, starting at 100
echo 'Painter 2\'s Doors: ' ;
for($p2=100; $p2>0; $p2-=3){
	array_push($painter2, $p2);
	echo $p2 . ' ';
}
echo '<br /><br />';


for($i=0; $i<count($painter1); $i++){
	//if the number of doors inbetween the two painters is less than one
	//then they have meet at the middle
	if($painter2[$i]-$painter1[$i] < 1) {
		echo 'When they meet in the middle, Painter 1 will be at door <strong>#' . $painter1[$i] .
			' </strong> and Painter 2 will be at door <strong>#' . $painter2[$i] . '</strong>';
		break;
	}
}