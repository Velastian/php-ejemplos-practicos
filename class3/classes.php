<?php

declare(strict_types= 1);
class SuperHero
{
  public function __construct(
    private string $name, 
    private array $powers, 
    private string $planet) {
  }

  public function attack(){
    return "$this->name ataca con sus poderes";
  }

  public function show_all(){
    return get_object_vars($this);
  }

  public static function random() {
    $name = ["Thor", "Spiderman", "Wolverine", "Ironman"];
    $powers = [["Fuerza","Electricidad"], 
    ["Fuerza","Sentido aracnido"], 
    ["Regeneracion","Resistencia"], 
    ["Inteligencia","Tecnologia"]];
    $planet = ["Asgard","Tierra","Tierra","Tierra"];

    $name = $name[array_rand($name)];
    $powers = $powers[array_rand($powers)];
    $planet = $planet[array_rand($planet)];

    return new self($name, $powers, $planet);
  }

  public function description(){

    $powes = implode(", ", $this->powers);

    return "$this->name es un superheroe del planeta 
    $this->planet y tiene los siguiente poderes: 
    $powes";
  }
}

$hero = SuperHero::random();
echo $hero->description();
