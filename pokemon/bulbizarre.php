<?php

	class Bulbizarre extends Pokemon
	{
		public function __construct ($name,$life_max, $life_update, $level, $type, $strength, $catched)
		{
		    $this->name = $name;
		    $this->life_max = $life_max;
		    $this->life_update = $life_update;
		    $this->level = $level;
		    $this->type = $type;
		    $this->strength = $strength;
		    $this->catched = $catched;
		}

		public function level_up()
		{
			$this->level += 1;
			$this->life_max += 7;
			$this->strength += 3;

			$level_up_text = $this->name . ' passe au niveau ' . $this->level . "\n il gagne 7 points de vie et 2 points de force.";

			echo $level_up_next;
			return true;
		}

	}
?>
