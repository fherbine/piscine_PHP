<?php 
function ft_split($str0)
{
	$new = array();
	$ref = explode(" ", $str0);
	foreach ($ref as $el)
	{
		if ($el != "")
			$new[] = $el;
	}
	sort($new);
	return ($new);
}
?>
