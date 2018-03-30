<?php
	session_start();
	include("auth.php");
	if ($_GET && $_GET['login'] && $_GET['passwd'] && $_GET['login'] && $_GET['login'] != "" && $_GET['passwd'])
	{
		if (auth($_GET['login'], $_GET['passwd']))
			$_SESSION['logged_on_user'] = $_GET['login'];
	}
?>
