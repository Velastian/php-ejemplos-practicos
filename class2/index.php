<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

// Inicializamos una nueva sesión de cURL; ch = cUrl handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desactiva verificación del certificado
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Desactiva verificación del host

// Alternativa usar file_get_contents
// $result = file_get_contents($ch);

// Ejecutar la peticion y guardar el resultado en $result
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>

<head>
  <meta charset="UTF-8">
  <title>La proxima pelicula de marvel</title>
  <meta name="description" content="La proxima pelicula de marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Centered viewport -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
  <!-- <pre style="font-size: 10px; overflow: scroll; height: 250px">
    <?php var_dump($data)  ?>
  </pre> -->
  <section>
    <img src=" <?= $data["poster_url"] ?> " width = "200" alt="Poster de <?= $data["title"]; ?>"
    style="border-radius: 16px;">
  </section>
  <hgroup>
    <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?></h3>
    <p>Fecha de estreno <?= $data["release_date"]; ?></p>
    <p>La siguiente es <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>