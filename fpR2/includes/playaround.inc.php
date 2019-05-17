<?php
if (isset($_POST['info-submit'])) {
    require "dbh.inc.php";

    $username = $_POST['username'];
    $group_name = $_POST['group_name'];
    $bestDay = $_POST['bestDay'];
    $timeOfDay = $_POST['timeOfDay'];
    $actualTime = $_POST['actualTime'];
    $workStatus = $_POST['workStatus'];
    $worstDay = $_POST['worstDay'];
    $comments = $_POST['comments'];

    if (empty($username) || empty($group_name) || empty($comments)) {

        header("Location: ../playaround.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT group_name FROM users WHERE group_name=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../playaround.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $group_name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            if($result_check == 0 ){
                header("Location: ../playaround.php?error=nonexistentgroup");
                exit();
            }
            else {
                $sql = "INSERT INTO when2meet (username, group_name, bestDay, timeOfDay, 
                                    actualTime, workStatus, worstDay, comments)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
               $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                   header("Location: ../playaround.php?error=sqlerror");
                   exit();
               }
               else {
                mysqli_stmt_bind_param($stmt, "ssssisss", $username, $group_name, $bestDay, $timeOfDay, 
                $actualTime, $workStatus, $worstDay, $comments);
                mysqli_execute($stmt);
                header("Location: ../playaround.php?infosubmit=success");
                
                exit();
               }


            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../playaround.php?");
    exit();
}