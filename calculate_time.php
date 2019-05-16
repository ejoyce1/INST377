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
print_r($gn);
echo "<br>"; 
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
//$value = max($array);
//$key = array_search($value, $array);
print_r($days);

?>
</body>
</html>