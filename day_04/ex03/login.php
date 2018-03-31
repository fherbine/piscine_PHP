<?php
	session_start();
	include("auth.php");
	if ($_GET && $_GET['login'] && $_GET['passwd'] && $_GET['login'] !== "" && $_GET['passwd'] !== "")
	{
		if (auth($_GET['login'], $_GET['passwd']) === true)
		{
			$_SESSION['logged_on_user'] = $_GET['login'];
			echo "OK\n";
		}
		else
		{
			$_SESSION['logged_on_user'] = $_GET['login'];
			echo "ERROR\n";
		}
	}
?>
