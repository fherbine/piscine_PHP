#!/usr/bin/php
<?php
	function ft_split($tosp)
	{
		$new = explode(" ", $tosp);
		$fin = array();
		foreach ($new as $el)
		{
			if ($el != "")
				$fin[] = $el;
		}
		return $fin;
	}
	if ($argc > 1)
	{
		$tab = ft_split($argv[1]);
		array_push($tab, array_shift($tab));
		$last = count($tab);
		$i = 0;
		foreach ($tab as $disp)
		{
			echo  $disp;
			$i++;
			if ($i != $last)
				echo " ";
		}
		echo "\n";
	}
?>
