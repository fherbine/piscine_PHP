#!/usr/bin/php
<?php
	function clean_this($tab)
	{
		$cleaned = array();
		foreach ($tab as $el)
		{
			if ($el != "")
				$cleaned[] = $el;
		}
		return $cleaned;
	}

	function mk_tab($fd)
	{
		$final = array();
		while ($line = fgetcsv($fd, 512, ";"))
		{
			$line = clean_this($line);
			if (count($line) == 4 && is_numeric($line[1]))
				$final[] = array($line[0] => $line[1], $line[2] => $line[3]);
		}
		print_r($final);
		return ($final);
	}

	function destroy_k($t, $ky)
	{
		foreach ($t as $l)
		{
			if ($l[$ky])
				unset($l[$ky]);
		}
		return $t;
	}

	function global_avrg($big_tab)
	{
		$n = 0;
		$moy = 0;
		foreach ($big_tab as $small_tab)
		{
			foreach ($small_tab as $st_key => $st_val)
			{
				if ($st_key != 'moulinette')
				{
					$moy += $st_val;
					$n++;
				}
			}
		}
		return $moy / $n;
	}

	function spec_avrg($sbig_tab, $search)
	{
		$sn = 0;
		$smoy = 0;
		foreach ($sbig_tab as $ssmall_tab)
		{
			foreach ($ssmall_tab as $sst_key => $sst_val)
			{
				if ($sst_key == $search)
				{
					$smoy += $sst_val;
					$sn++;
				}
			}
		}
		return $smoy / $sn;
	}
	function user_avrg($btab)
	{
		array_multisort($btab, SORT_ASC);
		foreach ($btab as $be)
		{
			foreach ($be as $kbe => $vbe)
			{
				echo $kbe.":".spec_avrg($btab, $kbe)."\n";
				$t = destroy_k($btab, $kbe);
			}
		}
	}
	if ($argc == 3)
	{
		if (($fd = fopen($argv[2], "r")) !== FALSE)
		{
			echo "OKOK\n";
			$tutu = mk_tab($fd);
			echo global_avrg($tutu);
			user_avrg($tutu);
		/*	if ($argv[1] == "moyenne")
			{
			}
			elseif ($argv[1] == "moyenne_user")
			{
			}
			elseif ($argv[1] == "ecart_moulinette")
			{
			}*/
			fclose($fd);
		}
	}
?>
