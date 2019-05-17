<?php
    //require "header.php";
?>

    <main>
        <div>
        <div id="create_session_title" class="jumbotron">
        <h1><a href="index.php"> COLLAB </a></h1>
        
	<div class="container text-center">
		<h3> Create A Group </h3>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] ==  "emptyfields") {
                    echo '<p style="color: red;text-decoration: underline;"><b> All fields not yet completed! </b></p>';
                }
                elseif ($_GET['error'] ==  "invalidusernameemail") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Invalid username and email! </b></p>';
                }
                elseif ($_GET['error'] ==  "invalidusername") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Invalid username! </b></p>';
                }
                elseif ($_GET['error'] ==  "passwordcheck") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Passwords do not match! </b></p>';
                }
                elseif ($_GET['error'] ==  "sqlerror") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Please try again! </b></p>';
                }
                elseif ($_GET['error'] ==  "usertaken") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Please choose a different username! </b></p>';
                }
                elseif ($_GET['error'] ==  "sqlerror") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Please try again! </b></p>';
                }
                elseif ($_GET['error'] ==  "invalidemail") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Invalid Email! </b></p>';
                }
               elseif ($_GET['error'] == "invalidgroupname") {
                    echo '<p style="color: red;text-decoration: underline;"><b> Group name taken choose another! </b></p>';
                }
            //success case
            elseif ($_GET['signup'] == "success") {
                echo '<p style="color: green;text-decoration: underline;"><b> Signup Sucessful! </b></p>';
            }
        }
        ?>
		<form action="includes/signup.inc.php" method="post">
            <input class="centerBox" type="text" name="group_name" placeholder="Group Name"><br><br>
            <input class="centerBox" type="text" name="username" placeholder=" Group username"><br><br>
            <input class="centerBox" type="password" name="pwd" placeholder="password"><br><br>
            <input class="centerBox" type="password" name="pwd-repeat" placeholder="re-type password"><br><br>
            <input class="centerBox" type="text" name="email" placeholder="e-mail"><br><br>

			<button type="submit" name="signup-submit"> Sign Up </button>
		</form>
    </div>
    
    </main>

<?php
    require "footer.php";
?>