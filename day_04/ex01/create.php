<?php
	if ($_POST && $_POST['submit'] == "OK" && $_POST['login'] !== "" && $_POST['passwd'] !== "")
	{
		$var = true;
		if (file_exists("../private") == false)
		{
			mkdir("../private", 0755, true);
			$var = true;
		}
		else
		{
			$file = file_get_contents("../private/passwd");
			if ($file)
			{
				$db = unserialize($file);
				foreach ($db as $account)
				{
					if ($account['login'] == $_POST['login'])
						$var = false;
				}
			}
		}
		if ($var === true)
		{
			$db[] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
			file_put_contents("../private/passwd", serialize($db));
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
