<?php 
include("conf/connect.php");
$username = $_POST['username'];
$password = $_POST['password'];

$sa = $DB->query("SELECT * FROM `admin` ");
$arr = mysqli_fetch_array($sa);


if ($username==$arr["username"] && $password==$arr['password']) {
	header("location:home");
}else{
	header("location:index");
}