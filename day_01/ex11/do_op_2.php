#!/usr/bin/php
<?php
	function ft_modif($str0)
	{
		$tab = explode(" ", $str0);
		$tab = array_filter($tab);
		$str0 = implode($tab);
		return $str0;
	}
	if ($argc != 2)
		exit("Incorrect Parameters\n");
	$argv[1] = ft_modif($argv[1]);
	if (ereg("^([0-9\+]|\-)([0-9]*)([\/\*\+\%]|\-)([0-9\+]|\-)([0-9]*)$", $argv[1]) == false)
		exit("Syntax Error\n");
	else if (ereg("\+", $argv[1]) && ereg("\-\+", $argv[1]) == false)
	{
		$tab = explode("+", $argv[1]);
		$tab2 = array_filter($tab);
		$res = 0;
		foreach ($tab2 as $elem)
			$res += $elem;
		echo $res;
	}
	else if (ereg("\/", $argv[1]))
	{
		$tab = explode("/", $argv[1]);
		if ($tab[1] == 0)
			exit("Syntax Error\n");
		echo $tab[0] / $tab[1];
	}
	else if (ereg("\*", $argv[1]))
	{
		$tab = explode("*", $argv[1]);
		echo $tab[0] * $tab[1];
	}
	else if (ereg("%", $argv[1]))
	{
		$tab = explode("%", $argv[1]);
		if ($tab[1] == 0)
			exit("Syntax Error\n");
		echo $tab[0] % $tab[1];
	}
	else
	{
		$tab = explode("-", $argv[1]);
		$a = ($tab[0] == "") ? $tab[1] * -1 : $tab[0];
		if ($a >= 0)
			$b = ($tab[1] == "") ? $tab[2] * -1 : $tab[1];
		else
			$b = ($tab[2] == "") ? $tab[3] * -1 : $tab[2];
		echo $a - $b;
	}
	echo "\n";
?>
