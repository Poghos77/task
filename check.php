<?php 
session_start();
include("admin/conf/connect.php");
$firstName = mysqli_real_escape_string($DB,trim($_POST['firstName']));
$lastName = mysqli_real_escape_string($DB,trim($_POST['lastName']));
$email = mysqli_real_escape_string($DB,trim($_POST['email']));
$message = mysqli_real_escape_string($DB,trim($_POST['message']));

$er1 = 0;
$er2 = 0;
$er3 = 0;
$er4 = 0;

if (mb_strlen($firstName,"utf8") < 4 || mb_strlen($firstName,"utf8") > 15) {
	$_SESSION["firstName_error"] = true;
	$er1 = 1;
}else{
	$_SESSION['firstName']=$firstName;
}
if (mb_strlen($lastName,"utf8") < 7 || mb_strlen($lastName,"utf8") > 20) {
	$_SESSION["lastName_error"] = true;
	$er2 = 1;
}else{
	$_SESSION['lastName']=$lastName;
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	$_SESSION["email_error"] = true;
	$er3 = 1;
}else{
	$_SESSION['email']=$email;
}
if (mb_strlen($message,"utf8")<10 ) {
	$_SESSION["message_error"] = true;
	$er4 = 1;
}else{
	$_SESSION['message']=$message;
}
if ($er1+$er2+$er3+$er4==0 ) {
	$DB->query("INSERT INTO `guest_reviews` (`firstName`,`lastName`,`email`,`message`) VALUES  ('$firstName','$lastName','$email','$message')");
	$_SESSION['thanks']=true;
}

header("location:index");

