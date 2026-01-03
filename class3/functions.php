<?php
declare(strict_types= 1);

function render_template (string $template, array $data = []){
  extract($data);
  require "templates/$template.php";
}

function get_data(String $url): array
{
  // Alternativa usar file_get_contents
  $result = file_get_contents($url); // Solo para hacer GET a una API

  // Ejecutar la peticion y guardar el resultado en $result
  $data = json_decode($result, true);

  return $data;
}

function get_until_message(int $days): string
{
  return match (true) {
  $days === 0 => "Hoy se estrena 🥳",
  $days === 1 => "Mañana se estrena 🚀" ,
  $days < 7 => "Esta semana se estrena 😮",
  $days < 30 => "Este mes se estrena 📅",
  default => "$days hasta el estreno 📅",
};
}
