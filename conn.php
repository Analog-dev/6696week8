<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex3";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("เชื่อมต่อข้อมูลล้มเหลว" . $conn->connect_error);
}
echo "เชื่อมต่อข้อมูลสำเร็จ";
?>