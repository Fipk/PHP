<?php

	class Carapuce extends Pokemon
	{
		public function __construct ($name, $life_max, $life_update, $level, $type, $strength, $catched)
		{
		    $this->name = 'Carapuce';
		    $this->life_max = $life_max;
		    $this->life_update = $life_update;
		    $this->level = $level;
		    $this->type = 'eau';
		    $this->strength = $strength;
		    $this->catched = $catched;
		}

		public function level_up()
		{
			$this->level += 1;
			$this->life_max += 9;
			$this->strength += 2;

			$level_up_text = $this->name . ' passe au niveau ' . $this->level . "\n il gagne 9 points de vie et 2 points de force.";

			echo $level_up_next;
			return true;
		}
	}
?>