<?php 

$hostname = "localhost";
$username = "root";
$password = ""; 
$db_name = "astradomini";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if ($conn->connect_error) {
    echo "koneksi database gagal";
    die("error");
}

?>