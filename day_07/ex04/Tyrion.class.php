<?php
class Tyrion
{
	public function sleepWith($somebody)
	{
		if ($somebody instanceof Jaime || $somebody instanceof Cersei)
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($somebody instanceof Sansa)
			print("Let's do this.".PHP_EOL);
	}
}
?>