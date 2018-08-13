<?php 
//Polimorfismo *--*
abstract class Animal {

	public function comunicar(){

		return "Som";
	}

	public function mover(){

		return "Anda";
	}
}
class Cachorro extends Animal {

	public function comunicar(){

		return "Late";
	
	}
}

class Gato extends Animal {

	public function comunicar(){

		return "Meow";
	}
}

class Passaro extends Animal {

	public function comunicar(){

		return "Cantarolar";
	}

	public function mover(){

		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->comunicar()."<br/>";
echo $pluto->mover()."<br/>";


echo "--------------------------<br/>";

$garfield = new Gato();

echo $garfield->comunicar()."<br/>";
echo $garfield->mover()."<br/>";

echo "--------------------------<br/>";

$ave = new Passaro();

echo $ave->comunicar()."<br/>";
echo $ave->mover()."<br/>";

?>