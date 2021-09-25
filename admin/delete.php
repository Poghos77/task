<?php
include("conf/connect.php");
$id = $_GET['id'];
$DB->query("DELETE  FROM `guest_reviews` WHERE `id` = '$id' ");
header("location:home.php");