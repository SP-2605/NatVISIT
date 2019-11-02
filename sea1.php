<?php
$pname='caribbean sea';
$conn = mysqli_connect("localhost", "root", "", "registration");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "update users set totalcost = totalcost + (select cost from place where pname='$pname') where username='Suriya'";
if ($conn->query($sql)){
echo "New total cost is updated sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>
