<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Task</title>
</head>
<body>

<header></header>
<main>
	<div class="container">
		 <?php if (isset($_SESSION['thanks'])) {
				echo "<div class = 'thanks'>Спасибо за отправку сообщения</div>";
				unset($_SESSION["thanks"]);
			} ?>
		<form action="check" method="post">
			<?php if (isset($_SESSION['firstName_error'])) {
				echo "<div class = 'error'>First name is incorrect!</div>";
				unset($_SESSION["firstName_error"]);
			} ?>
			<input placeholder="First Name" type="text" name="firstName" value="<?php
			 if(isset($_SESSION['firstName'])){
				echo $_SESSION['firstName'];
				unset($_SESSION['firstName']);
			}?>">
			<?php if (isset($_SESSION['lastName_error'])) {
				echo "<div class = 'error'>Last name is incorrect!</div>";
				unset($_SESSION["lastName_error"]);
			} ?>
			<input placeholder="Last Name" type="text" name="lastName" value="<?php
			 if(isset($_SESSION['lastName'])){
				echo $_SESSION['lastName'];
				unset($_SESSION['lastName']);
			}?>">
			<?php if (isset($_SESSION['email_error'])) {
				echo "<div class = 'error'>E-mail is incorrect!</div>";
				unset($_SESSION["email_error"]);
			} ?>
			<input placeholder="E-mail" type="text" name="email" value="<?php
			 if(isset($_SESSION['email'])){
				echo $_SESSION['email'];
				unset($_SESSION['email']);
			}?>">
			<?php if (isset($_SESSION['message_error'])) {
				echo "<div class = 'error'>Message is incorect!</div>";
				unset($_SESSION["message_error"]);
			} ?>
			<textarea placeholder="Message" name="message"><?php
			 if(isset($_SESSION['message'])){
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}?></textarea>
			<input type="submit" value="Send" >
		</form>
	</div>
</main>
<footer></footer>
	<script type="text/javascript" src="script/jquery.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
</body>
</html>
