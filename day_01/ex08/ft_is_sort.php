<?php
	function ft_is_sort($tab)
	{
		$ascii_code = 0;
		foreach ($tab as $elem)
		{
			if (ord($elem[0]) < $ascii_code)
				return false;
			$ascii_code = ord($elem[0]);
		}
		return true;
	}
?>
