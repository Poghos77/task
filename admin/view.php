<?php 
include("conf/connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Admin</title>
</head>
<body>
	<header></header>
	<main>
		<table class="table__2">
			<tr>
				<td>Name and Surname</td>
				<td>E-mail</td>
				<td>Message</td>
				<td>Date</td>
			</tr>
		
		<?php
		$id = $_GET['id'];
		$ar = $DB->query("SELECT * FROM `guest_reviews` WHERE `id` = '$id'");
		while($arr= mysqli_fetch_array($ar)){ ?>
			<tr>
				<td><?=$arr["firstName"]?> <?=$arr["lastName"]?></td>
				<td><?=$arr["Email"]?></td>
				<td><?=$arr["message"]?></td>
				<td><?=$arr["datetime"]?></td>
			</tr>
		<?php } ?>
		</table>
	</main>
	<footer></footer>
	<script type="text/javascript" src="script/jquery.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
</body>
</html>