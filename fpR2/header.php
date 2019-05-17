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
                        <a href="index.php" class="navbar-brand"> COLLAB </a>
                    </div>
                    
                    <div id="navbar" class="container text-right" class="collapse navbar-collapse"> 
                        <ul class= "nav navbar nav">
                              
                                <?php
                                    if (isset($_SESSION['userId'])) {
                                        echo '<li> <form action="includes/logout.inc.php" method="post">
                                                    <button type="submit" name="logout-submit"> Logout </button>
                                                </form>
                                                </li>';
                                    }
                                    else {
                                        echo '<form action="includes/login.inc.php" method="post">
                                                <li> <input type="text" name="username" placeholder="group username"> </li>
                                                <li> <input type="password" name="pwd" placeholder="password"> </li>
                                                <li> <button type="submit" name="login-submit"> Login </button> </li>
                                            </form>
                                                <li><a href="signup.php"> Signup </a></li>';
                                     }       
                                ?>
                              
                        </ul>
                    </div>
               </div>
            </nav>
        </header>
</html>