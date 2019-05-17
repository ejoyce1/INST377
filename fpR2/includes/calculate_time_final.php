<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<?php
//gets groupname from when2meet based on username in session. This is used in the next sql query to get the bestday data only for that users group
require ("dbh.inc.php");
session_start();
$group_name= "SELECT group_name FROM when2meet WHERE username = '".$_SESSION['user']."'";
$result_group_name=$result = $conn->query($group_name);
$group_row = $result->fetch_assoc();
$gn=$group_row['group_name'];


//makes array in which keys are the weekdays from best days available, and values are how many times that day was choosen
$sqlgrab = "SELECT bestDay, count(bestDay)
FROM when2meet 
WHERE group_name = '$gn'
group by bestDay";
$result = $conn->query($sqlgrab);
$array = array();
while($row = $result->fetch_assoc()) {
	$days[$row['bestDay']] = $row['count(bestDay)'];
          }
//functions for finding the max value and giving the correlating key (basically, it finds the most popular day)
$biggest = max($days);
//puts best days in array as values if there is a tie for "best day"
$biggest_days = array_keys($days, $biggest);
print "<h2>Best Day(s): </h2>";
foreach($biggest_days as $key => $value)
{
  print "<h3>" . $value . "</h3>";
}





//gets most popular time of day if there is agreed upon day
 if (count($biggest_days) == 1) {
 	$bigvalue=$biggest_days[0];
 	$sqlgrab2 = "SELECT timeOfDay, count(timeOfDay)
FROM when2meet 
WHERE group_name = '$gn' and bestDay = '$bigvalue'
group by timeOfDay";
$result2 = $conn->query($sqlgrab2);
$array2= array();
while($row2 = $result2->fetch_assoc()) {
	$days2[$row2['timeOfDay']] = $row2['count(timeOfDay)'];
          }
$biggest2 = max($days2);
$biggest_days2 = array_keys($days2, $biggest2);
print "<h2> Popular Times for " .$bigvalue. "</h2>";
foreach($biggest_days2 as $key => $value)
{
   print "<h3>" . $value . "</h3>";
}

 }
else {
	print "<h2>There are multiple popular days, they are: </h2>";
	foreach($biggest_days as $key => $value)
{
  print "<h3>" . $value . "</h3>";
}
}




//calculates worst days
$worst_grab = "SELECT worstDay, count(worstDay)
FROM when2meet 
WHERE group_name = '$gn'
group by worstDay";
$resultw = $conn->query($worst_grab);
$arrayw= array();
while($roww = $resultw->fetch_assoc()) {
	$daysw[$roww['worstDay']] = $roww['count(worstDay)'];
          }
//functions for finding the max value and giving the correlating key (basically, it finds the worst popular day)
$biggestw = max($daysw);

//puts worst days in array as values if there is a tie for "worst day"
$biggest_daysw = array_keys($daysw, $biggestw);
print "<h2>Worst Days: </h2>";
//gives list of worst days
foreach($biggest_daysw as $key => $value)
{
   print "<h3>" . $value . "</h3>";
}


      

?>
</body>
</html>