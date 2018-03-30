<?php
session_start();
if ($_GET && $_GET['submit'] == "OK" && $_GET['login'] != "" && $_GET['passwd'] != "")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
$log = ($_SESSION['login']) ? ($_SESSION['login']) : "";
$pw = ($_SESSION['passwd']) ? ($_SESSION['passwd']) : "";
$content = '<form method="get" action="index.php" style="border:1px solid black;border-radius:3px;padding:8px;">'."\n".'Identifiant: <input type="text" name="login" value="'.$log.'" /><br />'."\n".'Mot de passe: <input type="password" name="passwd" value="'.$pw.'" />'."\n".'<input type="submit" name="submit" value="OK" />'."\n".'</form>'."\n";
?>
<html>
	<body>
		<?php echo $content; ?>
	</body>
</html>
