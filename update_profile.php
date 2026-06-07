<?php
session_start();
include 'settings.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_POST['email'];

$query = "UPDATE `user`
          SET email='$email'
          WHERE username='$username'";

mysqli_query($conn, $query);

header("Location: profile.php");
exit();
?>