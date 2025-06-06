<?php
include("connect.php");
session_start();
if (isset($_POST['login']) == "login") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    $query = "select campus from login where user_id='$user_id' and password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $campus = $row['campus'];
        if ($campus == "Gida") {
            $_SESSION['uid'] = $user_id;
            echo "Gida";
        } else if ($campus == "Buxipur") {
            $_SESSION['uid'] = $user_id;
            echo "Buxipur";
        } else {
            $_SESSION['uid'] = $user_id;
            echo "Admin";
        }
    } else {
        echo "failed";
    }
}
if (isset($_POST['enquiry']) == "enquiry") {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $campus = htmlspecialchars($_POST['campus']);
    $course = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars($_POST['message']);
    $date = date("Y-m-d H:i:s");
    $sql = "insert into enquiry (name, contact, campus, course, message,created_at) VALUES ('$name','$contact','$campus','$course','$message','$date')";
    $stmt = mysqli_query($con, $sql);
    if ($stmt) {
        echo "success";
    }
}
?>