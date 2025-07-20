<?php
session_start();
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['re_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);

    if (empty($name)) {
        header("Location: signup.php?error=Name is required&uname=".$uname);
        exit();
    } else if(empty($uname)) {
        header("Location: signup.php?error=User Name is required&name=".$name);
        exit();
    } else if(empty($pass)) {
        header("Location: signup.php?error=Password is required&name=".$name."&uname=".$uname);
        exit();
    } else if($pass !== $re_pass) {
        header("Location: signup.php?error=The passwords do not match&name=".$name."&uname=".$uname);
        exit();
    } else {
        // hashing the password
        $pass = md5($pass);

        $sql = "INSERT INTO users(name, user_name, password) VALUES('$name', '$uname', '$pass')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: signup.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: signup.php?error=Unknown error occurred&name=".$name."&uname=".$uname);
            exit();
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
?>
