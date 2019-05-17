<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COLLAB</title>
		<link rel="stylesheet" type="text/css" href="collabmeet.css">
		<meta name= "description" contents= "collabmeet_username">
	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <style>
            a {
                color: black;
            }
            a.visited{
                color: black;
            }
            a.hover{
                color: black;
            }
        </style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color", "#cccccc");
			});
			$("input").blur(function(){
				$(this).css("background-color", "#ffffff");
			});
			});
		</script>
	</head>
<body id="input_body" class="main_body">
	<div id="playaround_title" class="jumbotron">
		<h1><a href = index.php>COLLAB</a></h1>
	</div>
	<div class="container text-center">
			<?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] ==  "emptyfields") {
                    echo '<p style="color: red;text-decoration: underline;"><b> All fields not yet completed! </b></p>';
                }
                
                elseif ($_GET['error'] ==  "sqlerror") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Please try again! </b></p>';
                }
                
                elseif ($_GET['error'] ==  "sqlerror") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Please try again! </b></p>';
                }
                
               elseif ($_GET['error'] == "nonexistentgroup") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Group does not exist! </b></p>';
                }
            //success case
            elseif ($_GET['infosubmit'] == "success") {
                echo '<p style="color: green;text-decoration: underline;"><b> Submission Sucessful! </b></p>';
            }
        }
        ?>
	<form action="includes/playaround.inc.php" method="post">
		Username <br>
		<input class="centerBox" type="text" name="username" placeholder="Username"><br>
		Group name <br>
		<input class="centerBox" type="text" name="group_name" placeholder="Group Name"> <br><br>
		Which day do you prefer? <br>
		<select id="bestDay" name="bestDay" class="centerBox">
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
		</select> <br> <br>

		Do you prefer MORNING or AFTERNOON? <br>
		<select id="timeDay" name="timeOfDay" class="centerBox">
			<option value="MORNING">MORNING (AM)</option>
			<option value="AFTERNOON">AFTERNOON (PM)</option>
		</select> <br><br>
		Choose BEST time to meet <br>
		<select id="time" name="actualTime" class="centerBox">
			<option value="12">12:00</option>
			<option value="1">01:00</option>
			<option value="2">02:00</option>
			<option value="3">03:00</option>
			<option value="4">04:00</option>
			<option value="5">05:00</option>
			<option value="6">06:00</option>
			<option value="7">07:00</option>
			<option value="8">08:00</option>
			<option value="9">09:00</option>
			<option value="10">10:00</option>
			<option value="11">11:00</option>
		</select><br><br>
			Do you work? <br>
			<select name="workStatus" class="centerBox">
			<option value="Full-Time">Full-Time</option> <br>
			<option value="Part-Time">Part-Time</option><br>
			<option value="Don't Work">Don't Work</option>
		</select><br>
		<!--<a id="preferenceslink" href="collabpreferences.html"><u>meeting preferences</u></a> <br><br>-->
		<!--<a href="done_page.html"><input type="submit" value="submit"></a>-->
		<!--<a href="done_page.html"><button type="button" class="btn btn-light">NEXT</button></a><br><br>-->
	
	<h3><i><u> Preferences </u></i></h3>

	
		<!--Change to drop down or radio boxes--><form id="worstDay">
		When is your worst day(s) to meet? <br><br>
		<input type="checkbox" name="mondayWorst"> M
		<input type="checkbox" name="tuesdayWorst"> T
		<input type="checkbox" name="wednesdayWorst"> W
		<input type="checkbox" name="thursdayWorst"> Th
		<input type="checkbox" name="fridayWorst"> F
		<input type="checkbox" name="saturdayWorst"> Sa
		<input type="checkbox" name="sundayWorst"> Su <br> <br>
		<textarea name="comments" class="centerBox">
		enter any comments you want the group leader to know
		</textarea><br><br>
		<input type="submit" name="info-submit">
		<!--<a href="done_page.html"><button type="button" class="btn btn-light">NEXT</button></a><br><br>-->
		</form> <br>

		
	</div>

	


	<script type="text/javascript">
		/*var mon = document.writeln("<input type='radio' name='dayOfWeek' value='Monday'/> Monday")
		var tu = document.writeln("<input type='radio' name='dayOfWeek' value='Tuesday'/> Tuesday")
		var wed = document.writeln("<input type='radio' name='dayOfWeek' value='Wednesday'/> Wednesday")
		var thu = document.writeln("<input type='radio' name='dayOfWeek' value='Thursday'/> Thursday")
		var fri = document.writeln("<input type='radio' name='dayOfWeek' value='Friday'/> Friday")
		var sat = document.writeln("<input type='radio' name='dayOfWeek' value='Saturday'/> Saturday")
		var sun = document.writeln("<input type='radio' name='dayOfWeek' value='Sunday'/> Sunday")
		*/
		

		function buttonHandler() {
			alert("You have chosen " + document.getElementById('bestDay') +" "+ document.getElementById('timeDay') +" at "+ document.getElementById('time'));
		}
		function thankYou() {
			alert("Submitted! Thank You For Your Submission!");
		}
		/*document.writeln("<button id='created' type='button' onclick='buttonHandler();'> Done </button>");*/
	</script>
</body>
</html>