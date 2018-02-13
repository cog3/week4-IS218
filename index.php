<?php
//#2
$date =  date("Y/m/d", time());
echo "The value of \$date: ".$date."<br>";

//#4
for($i = 0;$i<strlen($date);$i++){
	if($date[$i] === '/'){
		echo "Position for '/' is: $i <br>";
	}
}

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

//#3
if($date - $tar > 0){
	echo 'the future <br>';
}
elseif ($date-$tar == 0) {
	echo 'Ooops <br>';
}
else{
	echo 'the past <br>';
}






$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)."<br>";






//#10
echo "<br>";
$is_leap_year  = array();
foreach ($year as $y) {
	$current_year = (int)$y;
	if($current_year%4!==0){
		$is_leap_year[$current_year] = false;
	}
	elseif ($current_year%4 === 0 && $current_year%100 ===0 && $current_year%400!==0) {
		$is_leap_year[$current_year] = false;
	}
	elseif($current_year%4 === 0 && $current_year%100 ===0 && $current_year%400===0){
		$is_leap_year[$current_year] = true;
	}
	elseif ($current_year%4===0 && $current_year%100!==0) {
		$is_leap_year[$current_year] = true;	
	}
	else{
		echo "Not a year.";
	}
}

for($i = 0;$i<count($year);$i++){
	$current_year = (int)$year[$i];
	if($current_year%4!==0){
		$is_leap_year[$current_year] = false;
	}
	elseif ($current_year%4 === 0 && $current_year%100 ===0 && $current_year%400!==0) {
		$is_leap_year[$current_year] = false;
	}
	elseif($current_year%4 === 0 && $current_year%100 ===0 && $current_year%400===0){
		$is_leap_year[$current_year] = true;
	}
	elseif ($current_year%4===0 && $current_year%100!==0) {
		$is_leap_year[$current_year] = true;
	}
	else{
		echo "Not a year.";
	}

}
$count = 0;
do{

	
	$current_year = (int)$year[$count];
	switch ($current_year) {
		case $current_year%4!==0:
			echo "False"." ";
			$count += 1;
			break;
		case $current_year%4 === 0 && $current_year%100 ===0 && $current_year%400!==0;
			echo "False"." ";
			$count += 1;
			break;
		case $current_year%4 === 0 && $current_year%100 ===0 && $current_year%400===0:
			 echo "True"." ";
			 $count += 1;
			 break;
		case $current_year%4===0 && $current_year%100!==0:
			echo "True"." ";
			$count += 1;
			break;
		default:
			break;
	}
}
while ($count <count($year));


//#5
$words_in_date = explode(" ", $date);
echo "<br>"."The amount of words in \$date: ".count($words_in_date)."<br>";

//#6
$random_string = "Hey, I love nature.";
echo "The length of the string \"$random_string\" is: ".strlen($random_string)."<br>";

//#7
echo "The ASCII value of the first element of a random string is: ".ord($random_string[0])."<br>";

//#8
echo "The last two characters in \$date are: ".$date[strlen($date) -1]." and ".$date[strlen($date) -2]."<br>";

//#9
$array_2 = explode("/", $date);
for($i = 0;$i<count($array_2);$i++){
	if($array_2[$i] !== " "){
		echo "$i element ".$array_2[$i]."<br>";
	}
}

?>