#!/usr/bin/php
<?php
	$stdin = fopen('php://stdin', 'r');
	echo "Entrez un nombre: ";
	$nb = fgets($stdin);
	while ($nb)
	{
		$n = explode("\n", $nb);
		if (is_numeric($n[0]) && ereg("^([0-9]|-)([0-9]*)$", $n[0]))
		{
			if (!(((int)$n[0][strlen($n[0]) - 1])&1))
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
