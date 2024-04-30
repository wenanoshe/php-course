<?php
# Intialize a new CURL session

const API_URL = "https://jsonplaceholder.typicode.com/posts/1";
const API_URL2 = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL2);
// Indicate that we want to recive the response and doesn't display it in DOM
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// execute the petition and save the result
$result = curl_exec($ch);
$data = json_decode($result, true);

/*
    if we only want to make a GET pettion
    $result = file_get_contents(API_URL)
*/

curl_close($ch);

?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <title>When is the next marvel movie?</title>
</head>
<main>
    <h1>When is the next Marvel film?</h1>
    <hgroup>
        <h2><?= $data["title"]; ?></h2>
        <p>Release date: <?= $data["release_date"]; ?>, <?= $data["days_until"]; ?> days left </p>
        <p>Afterwards production: <?= $data["following_production"]["title"] ?></p>
    </hgroup>
    <p><?= $data["overview"] ?></p>
    <img src="<?= $data["poster_url"] ?>" width="400" alt="<?= $data["title"] ?> poster" />
</main>

<style>
    body {
        display: grid;
        place-content: center;
    }
</style>