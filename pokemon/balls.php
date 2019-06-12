<?php

	class Balls
	 {
	 	public $name;
	 	public $level;

	 	public function catch($max_life, $life, $lvl_pokemon, $catched_pokemon)
	 	{
	 		$catch_luck = (($max_life - $life) / $max_life) * (1 + ($this->level - $lvl_pokemon) / 25) /1;
	 		$luck = rand(0, 100)/100;
	 		if ($chance <= $catch_luck)
	 			{
	 				$catched_pokemon = true;
	 				echo 'Vous avez capturé le pokémon';
	 			}
	 		else
	 		{
	 			echo 'dommage vous avez perdu la pokeball';
	 		}
	 	}

	 }
?>