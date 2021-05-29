<?php
session_start();
$logout = $_POST['logout'];
if($logout == 'Logout'){
$_SESSION['userid'] = "nahi";

header("Location: index.php");
}
echo "<j1>Text enterred incorrectly</h1>";
?>