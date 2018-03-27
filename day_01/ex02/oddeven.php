#!/usr/bin/php
<?php
	$stdin = fopen('php://stdin', 'r');
	echo "Entrez un nombre: ";
	$nb = fgets($stdin);
	while ($nb)
	{
		$n = explode("\n", $nb);
		if (is_numeric($n[0]) && ctype_digit($n[0]))
		{
			if (!($n[0]&1))
				echo "Le chiffre ".$n[0]." est Pair\n";
			else
				echo "Le chiffre ".$n[0]." est Impair\n";
		}
		else
			echo "'".$n[0]."' n'est pas un chiffre\n";
		echo "Entrez un nombre: ";
		$nb = fgets($stdin);
	}
	fclose($stdin);
	echo "\n";
?>
