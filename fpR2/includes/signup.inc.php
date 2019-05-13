<?php
if (isset($_POST['signup-submit'])){

    require "dbh.inc.php";

    $group_name = $_POST['group_name'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];
    $email = $_POST['email'];

    if(empty($group_name) || empty($username) || empty($pwd) || empty($pwd_repeat) || empty($email)){
        header("Location: ../signup.php?error=emptyfields&group_name=".$group_name."&username=".$username."&email=".$email);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invalidusernameemail");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&group_name=".$group_name."&username=".$username);
        exit(); 
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invalidusername&group_name=".$group_name."&email=".$email);
        exit(); 
    }
    elseif($pwd !== $pwd_repeat){
        header("Location: ../signup.php?error=passwordcheck&group_name=".$group_name."&username=".$username."&email=".$email);
        exit(); 
    }
    else {
        
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit(); 
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            if($result_check > 0){
                header("Location: ../signup.php?error=usertaken&email=".$email);
                exit(); 
            }
            else {
                $sql = "INSERT INTO users (username, pwdUsers, emailUser, group_name) 
                        VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                exit();
                }
            else {
                $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ssss", $username, $hashed_pwd, $email, $group_name);
                mysqli_execute($stmt);
                mysqli_stmt_store_result($stmt);
                header("Location: ../signup.php?signup=success");
                exit();
                }
            } 
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else{
    header("Location: ../signup.php");
    exit();
}

