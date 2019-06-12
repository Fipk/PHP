<?php

	class Pokeball
	 {
	 	public $name;
	 	public $level;

	 	public function __construct($name, $level)
	 	{
	 		$this->name = $name;
	 		$this->level = $level;
	 	}

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
	
	class Pokemon
	{
		public $name;
		public $life_max;
		public $life_update;
		public $level;
		public $type;
		public $strength;
		public $catched;

		public function __construct ($name, $life_max, $life_update, $level, $type, $strength, $catched)
		{
		    $this->name = $name;
		    $this->life_max = $life_max;
		    $this->life_update = $life_update;
		    $this->level = $level;
		    $this->type = $type;
		    $this->strength = $strength;
		    $this->catched = $catched;

		}

		public function attack($damage)
		{
			var_dump($damage);
			$this->life_update -= $damage * (rand(900, 1100) / 1000);
		}

	}

	$pokemon = new Pokemon('Pikachu', 100, 100, 5, 'electric', 10, false);
	$pokemon_sauvage = new Pokemon('Carapuce', 120, 120, 5, 'electric', 15, false);
	$pokeball = new Pokeball('Pokeball', 5);
	$pokemon->attack($pokemon_sauvage->strength);
	$pokemon_sauvage->attack($pokemon->strength);
	$pokeball->catch($pokemon_sauvage->life_max, $pokemon_sauvage->life_update, $pokemon_sauvage->level, $pokemon_sauvage->catched);
	

