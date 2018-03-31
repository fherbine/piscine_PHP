<?php
	session_start();
	if ($_SESSION)
		$_SESSION['logged_on_user'] = "";
?>
