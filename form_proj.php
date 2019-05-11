<!DOCTYPE html>
<html>
<head>
  <title>Processor</title>

  <style>
    div {
      margin-top: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<?php
$dbuser = 'root';
$dbpass = '';
$dbname = 'Schedule_Project_Data';

$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
}
/*functions to prevent sql and html injection*/
function sanitizeString($var)
   {   
   	$var = stripslashes($var);   
    $var = strip_tags($var);    
    $var = htmlentities($var);    
    return $var;  
}
 function sanitizeMySQL($connection, $var) 
  {   $var = $connection->real_escape_string($var);
      $var = sanitizeString($var);   
      return $var; 
        } 
$username = sanitizeMySQL($conn, $_POST['username']);
$weekDay = sanitizeMySQL($conn, $_POST['weekDay']);
$timeOfDay = sanitizeMySQL($conn, $_POST['timeOfDay']);
$actualTime = sanitizeMySQL($conn, $_POST['actualTime']);
$works=sanitizeMySQL($conn, $_POST['works']);

$sql = "INSERT INTO students
  (username, day_preference, day_time, work_status, best_time)
  VALUES ('$username', '$weekDay', '$timeOfDay', '$works', '$actualTime' );";
if ($conn->query($sql) === TRUE) {;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<ul>
  <li><?php echo $username;?></li>
  <li><?php echo $weekDay;?></li>
  <li><?php echo $timeOfDay;?></li>
  <li><?php echo $actualTime;?></li>
  <li><?php echo $works;?></li>
</ul>
</body>
</html>