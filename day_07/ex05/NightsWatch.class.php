<?php
class NightsWatch implements IFighter
{
	public $var = [];
	public function recruit($somebody)
	{
		$this->var[] = $somebody;
	}
	function fight()
	{
		foreach ($this->var as $elem)
		{
			if (method_exists(get_class($elem), 'fight'))
				$elem->fight();
		}
	}
}
?>