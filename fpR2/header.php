<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>COLLAB</title>
	<meta name= "description" contents= "collabmeet_username">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>
       <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navBar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                        </button>
                        <a class="navbar-brand" href="index.php"> COLLAB </a>
                    </div>
                    
                    <div id="navbar" class="container text-right" class="collapse navbar-collapse"> 
                        <ul class= "nav navbar nav">
                            <li>  
                                <?php
                                    if (isset($_SESSION['userId'])) {
                                        echo '<form action="includes/logout.inc.php" method="post">
                                                    <button type="submit" name="logout-submit"> Logout </button>
                                                </form>';
                                    }
                                    else {
                                        echo '<form action="includes/login.inc.php" method="post">
                                                <input type="text" name="username" placeholder="username">
                                                <input type="password" name="pwd" placeholder="password">
                                                <button type="submit" name="login-submit"> Login </button>
                                            </form>
                                        <a href="signup.php">Sign Up</a>';
                                     }       
                                ?>
                            </li>    
                        </ul>
                    </div>
               </div>
            </nav>
        </header>
</html>