<?php
function auth($login, $passwd)
{
	if (file_exists("../private") == true)
	{
		$file = file_get_contents("../private/passwd");
		if ($file)
		{
			$db = unserialize($file);
			foreach ($db as $account)
			{
				if ($account['login'] === $login && $account['passwd'] === hash("whirlpool", $passwd))
					return TRUE;
			}
		}
	}
	return FALSE;
}
?>
