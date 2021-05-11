<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$userid = $_POST['username'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];



$conn = new mysqli('localhost','ankitc' , '1234' , 'realestate');
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into registration(name, email, userid, password, gender, address, city) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$name,$email,$userid,$password,$gender,$address,$city);
    $execval = $stmt->execute();
    $stmt = $conn->prepare("insert into user(name, email, userid, password, city) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$email,$userid,$password,$city);
    $execval = $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: http://localhost/IWPP/RegisterForm.html");
}


?>