<?php
    require "header.php";
?>

    <main>
    <style> 
        div{
           
        }
    </style>
        <div class="container text-center">
        
        <?php
            if (isset($_SESSION['userId'])) {
                echo "<p>You have logged in</p>";
                #echo "<a href=playaround.html> Add your schedule </a>"
                include("playaround.php");
            }
            else {
                echo "<p>You are logged out</p>";
            }       
        ?>

        <div>
    </main>

<?php
    require "footer.php";
?>