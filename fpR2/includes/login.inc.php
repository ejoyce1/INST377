<?php
if(isset($_POST['login-submit'])){

    require "dbh.inc.php";

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    if (empty($username || $pwd)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($results)) {
                $pwd_check = password_verify($pwd, $row['pwdUsers']);
                if($pwd_check == false){
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
                elseif ($pwd_check == true) {
                    session_start();
                    $_SESSION[userId] = $row['idUsers'];
                    $_SESSION[user] = $row['username'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../index.php?");
    exit();
}