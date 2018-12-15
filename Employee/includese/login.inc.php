<?php

if (isset($_POST['login-submit'])) {
    
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if (empty($mailuid) || empty($password)) {
        header("Location: ../employee.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=? or emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: .../employee.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck==false) {
                    header("Location: ../employee.php?error=wrongpwd");
                    exit(); 
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userid'] = $row['idUsers'];
                    $_SESSION['useruid'] = $row['uidUsers'];
                    
                    header("Location: ../employee.php?login=success");
                    exit();
                    
                } else {
                    header("Location: ../employee.php?error=wrongpwd");
                    exit();  
                }
            } else {
                header("Location: ../employee.php?error=nouser");
                exit();
            }
        }
    }
    
} else {
    header("Location: ../employee.php");
    exit();
}