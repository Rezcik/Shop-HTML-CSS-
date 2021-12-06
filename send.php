<?php
if(isset($_POST['submit'])){
	$email = trim($_POST['email']);

	$message = "Hekto!\nАдрес электронной почты: $email";

	$pagetitle = "Сообщение с сайта Hekto";

	mail($email, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: Hekto");
	
	header("Location: index.html");
}
?>

