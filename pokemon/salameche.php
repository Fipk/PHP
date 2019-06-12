<?php

	class Salameche extends Pokemon
	{
		public function __construct ($name, $life_max, $life_update, $level, $type, $strength, $catched)
		{
		    $this->name = 'Salameche';
		    $this->life_max = $life_max;
		    $this->life_update = $life_update;
		    $this->level = $level;
		    $this->type = 'feu';
		    $this->strength = $strength;
		    $this->catched = $catched;
		}


		public function level_up()
		{
			$this->level += 1;
			$this->life_max += 5;
			$this->strength += 4;

			$level_up_text = $this->name . ' passe au niveau ' . $this->level . "\n il gagne 5 points de vie et 4 points de force.";

			echo $level_up_next;
			return true;
		}

	}
?>