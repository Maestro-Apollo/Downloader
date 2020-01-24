<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "downloader";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn) {
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $mysql = "Insert into user_tbl(filename) values('$fileName')";
        if (mysqli_query($conn, $mysql)) {
            move_uploaded_file($file['tmp_name'], "upload/" . $fileName);
        }
    }
    header('location:index.php');
    echo "Connected";
} else {
    echo "No!";
}