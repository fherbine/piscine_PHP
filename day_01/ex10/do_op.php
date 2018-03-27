#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$tab = array();
		for ($i = 1; $i < $argc; $i++)
			$tab[] = trim($argv[$i]);
		if ($tab[1] == "-")
			echo $tab[0] - $tab[2]; 
		else if ($tab[1] == "+")
			echo $tab[0] + $tab[2]; 
		else if ($tab[1] == "*")
			echo $tab[0] * $tab[2]; 
		else if ($tab[1] == "/")
			echo $tab[0] / $tab[2]; 
		else if ($tab[1] == "%")
			echo $tab[0] % $tab[2]; 
	}
	else
		echo "Incorrect Parameters";
	echo "\n";
?>
