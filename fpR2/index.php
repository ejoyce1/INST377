<?php
    require "header.php";
?>

    <main>
        <div class= "container text-center">
        <?php
            if (isset($_SESSION['$userId'])) {
                echo "<p>You have logged in</p>";
            }
            else {
                #echo "<p>You are logged out</p>";
            }       
        ?>
        </div>     
    </main>

<?php
    require "footer.php";
?>