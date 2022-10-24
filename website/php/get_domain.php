<?php
$servername = "localhost:3306";
$username = "theintal_read";
$password = "";
$dbname = "theintal_domains";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $conn->query("SELECT ROUND(RAND() * (SELECT MAX(id) FROM domains))")->fetch_array()[0];
$domain = "http://".$conn->query("SELECT domain FROM domains WHERE id = $id;")->fetch_array()[0];

$conn->close();
?>