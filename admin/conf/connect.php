<?php
$DB = @new mysqli("localhost","root","","task");
if($DB -> connect_error){
	die("Connection Error!");
}else{
	mysqli_set_charset($DB,"utf8");
}