<?php
$name = "Juan";
$isDev = true;
$age = 24;
$newAge = $age + '5';

var_dump($name);
echo gettype($isDev);
echo is_int($age);

$isOld = $age >= 40;
$outputAge = $isOld ? "Eres viejo" : "Eres joven";

$outputAge = match (true) {
  $age <= 2 => "Eres un bebe $name",
  $age <= 10 => "Eres un niño $name" ,
  $age < 18 => "Eres un adolescente $name",
  $age >= 18 && $age < 30 => "Eres joven $name",
  default => "Eres un adulto $name" 
};

$bestLanguage = ["Javascript", "PHP", "Python", 1, 2];
$bestLanguage[3] = "Java";
$bestLanguage[] = "Typescript";

// Diccionario
$person = [
  "name" => "Juan",
  "age" => 24,
  "isDev" => true,
  "languages" => ["Javascript", "PHP", "C#"]
];

$person ["name"] = "Miguel";
$person ["languages"][] = "Python";

// if ($isOld){
//   echo "<h2>Eres viejo</h2>";
// } else{
//   echo "<h2>Eres joven</h2>";
// }

// Variables constantes
define("LOGO_URL", "https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg");
const NOMBRE = "Miguel";

$output = "Hola {$person["name"]}, con edad de {$person["age"]}. ";

?>

<!-- <?php if ($isOld) : ?>
  <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
  <h2>Eres joven, pero eres dev.</h2>
<?php else : ?>
  <h2>Eres joven</h2>
<?php endif; ?> -->

<h3>El mejor lenguaje es <?= $bestLanguage[1] ?></h3>

<ul>
  <?php foreach ($bestLanguage as $key => $language) : ?>
    <li><?= $key. " " . $language ?></li>
  <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="Logo PHP", width="200">

<h1>
  <?= $output ?>
</h1>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
