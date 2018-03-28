#!/usr/bin/php
<?php
	function v_hms($str0)
	{
		$tst = explode(":", $str0);
		if (!((int)$tst[0] >= 0 && (int)$tst[0] <= 23))
			exit("Wrong Format\n");
		if (!((int)$tst[1] >= 0 && (int)$tst[1] < 60))
			exit("Wrong Format\n");
		if (!((int)$tst[2] >= 0 && (int)$tst[2] < 60))
			exit("Wrong Format\n");
	}

	function get_month($str1)
	{
		if (preg_match("/[Jj]anvier/", $str1))
			return "January";
		elseif (preg_match("/[Ff]evrier/", $str1))
			return "February";
		elseif (preg_match("/[Mm]ars/", $str1))
			return "March";
		elseif (preg_match("/[Aa]vril/", $str1))
			return "April";
		elseif (preg_match("/[Mm]ai/", $str1))
			return "May";
		elseif (preg_match("/[Jj]uin/", $str1))
			return "June";
		elseif (preg_match("/[Jj]uillet/", $str1))
			return "July";
		elseif (preg_match("/[Aa]out/", $str1))
			return "August";
		elseif (preg_match("/[Ss]eptembre/", $str1))
			return "September";
		elseif (preg_match("/[Oo]ctobre/", $str1))
			return "October";
		elseif (preg_match("/[Nn]ovembre/", $str1))
			return "November";
		elseif (preg_match("/[Dd]ecembre/", $str1))
			return "December";
	}

	if ($argc == 2 && preg_match("^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi) [0-9]{1,2} ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}^", $argv[1]))
	{
		$argv[1] = preg_replace("/ +/", " ", $argv[1]);
		$parse = explode(" ", $argv[1]);
		if (!((int)$parse[1] > 0 && (int)$parse[1] <= 31))
			exit("Wrong Format\n");
		elseif (!((int)$parse[3] >= 1970))
			exit("Wrong Format\n");
		v_hms($parse[4]);
		date_default_timezone_set("Europe/Paris");
		$tst = strtotime($parse[1]." ".get_month($parse[2])." ".$parse[3]." ".$parse[4]);
		echo $tst."\n";
	}
	else
		exit("Wrong Format\n");
?>
