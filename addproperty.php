<?php

$name = $_POST['holdername'];
$address = $_POST['address'];
$price = $_POST['price'];




$conn = new mysqli('localhost','ankitc' , '1234' , 'realestate');
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into properties(holdername, address, price) values(?,?,?)");
    $stmt->bind_param("sss",$name,$address,$price);
    $execval = $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: http://localhost/IWPP/AddProperty.html");
}

?>