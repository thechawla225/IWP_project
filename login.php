<?php
if(isset($_SESSION['login']))
{session_destroy();}

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','ankitc' , '1234' , 'realestate');
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
else
{
    $sql = "SELECT * from user where email = '$email' and password = '$password'";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
    while($row = $result-> fetch_assoc())
    {
        $_SESSION['userid'] = $row['userid'];
        header("Location: index.php");
    } 
    }
    else
    {
        echo '<h1>Invalid username or password</h1>';

    }

    $conn-> close();
}




?>