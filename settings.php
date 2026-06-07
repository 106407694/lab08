Settings.php 
<?php
$conn = mysqli_connect("localhost", "root", "", "exhibitiondata2_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
