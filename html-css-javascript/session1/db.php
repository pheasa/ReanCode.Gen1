<?php
$conn = mysqli_connect("localhost","root","","reancode");
$conn->set_charset('utf8');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}