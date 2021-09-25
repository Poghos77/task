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
		<table cellspacing="0">
			<tr class="subtitle">
				<td class="name">Name & Surname</td>
				<td class="email">E-mail</td>
				<td class="message">Message</td>
				<td class="date">Date</td>
				<td class="button">View</td>
				<td class="button">Delete</td>
			</tr>
		<?php 
		$ar = $DB->query("SELECT * FROM `guest_reviews` ");
		while ($arr = mysqli_fetch_array($ar)){?>
			 <tr>
				<td class="name"><?=$arr["firstName"]?> <?=$arr["lastName"]?></td>
				<td class="email"><?=$arr["Email"]?></td>
				<td class="message"><?=$arr["message"]?></td>
				<td class="date"><?=$arr["datetime"]?></td>
	 			<td class="button"><a href="view.php?id=<?=$arr['id']?>">View</a></td>
				<td class="button delete"><a href="delete.php?id=<?=$arr['id']?>">Delete</a></td>
			</tr>
		<?php } ?>
		</table>
	</main>
	<p class="clear"></p>
	<footer></footer>
	<script type="text/javascript" src="script/jquery.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
</body>
</html>