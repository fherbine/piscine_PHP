<?php
	if ($_POST && $_POST['submit'] == "OK" && $_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] != "")
	{
		$i = 0;
		if (file_exists("../private") == true)
		{
			$file = file_get_contents("../private/passwd");
			if ($file)
			{
				$db = unserialize($file);
				foreach ($db as $account)
				{
					if ($account['login'] == $_POST['login'] && $account['passwd'] == hash("whirlpool", $_POST['oldpw']))
					{
						$db[$i]['passwd'] = hash("whirlpool", $_POST['newpw']);
						file_put_contents("../private/passwd", serialize($db));
						echo "OK\n";
						return ;
					}
					$i++;
				}
			}
		}
	}
	echo "ERROR\n";
?>
