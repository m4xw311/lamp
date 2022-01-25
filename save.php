<?php
$conn = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], "docker");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO demo (name, email) VALUES ('". $_POST['name']. "', '".$_POST['email'] ."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
