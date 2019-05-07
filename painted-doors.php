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

echo 'Painter 1\'s Doors: ';
for($i=1; $i<=100; $i+=2){
	array_push($painter1, $i);
	echo $i . ' ';
}
echo '<br />';

echo 'Painter 2\'s Doors: ' ;
for($j=100; $j>0; $j-=3){
	array_push($painter2, $j);
	echo $j . ' ';
}
echo '<br /><br />';


for($k=0; $k<count($painter1); $k++){
	//if the number of doors inbetween the two painters is less than one
	//then they have meet at the middle
	if($painter2[$k]-$painter1[$k] < 1) {
		echo 'When they meet in the middle, Painter 1 will be at door <strong>#' . $painter1[$k] .
			' </strong> and Painter 2 will be at door <strong>#' . $painter2[$k] . '</strong>';
		break;
	}
}