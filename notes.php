<?php

$name = "Braider";
$age = 19;
$dbl = 40.3;

var_dump($name);
var_dump($age);
var_dump($dbl);
// CONSTANTS
// global
define('LOGO_URL', "https://fastly.picsum.photos/id/49/200/300.jpg?hmac=mC_cJaZJfrb4JZcnITvz0OOwLCyOTLC0QXH4vTo9syY");
// local
const PI = 3.14;

$isOld = $age > 50 ? "Sorry!" : "Ok, live";

// this is like a switch case but best, because the result can be asigned to a variable
$outputAge = match (true) {
    $age < 2 => "You are a Baby 👶",
    $age < 10 => "You are a child 👦",
    $age < 18 => "You are teen 🧒",
    $age === 18 => "You are older 🧑‍🦰",
    $age < 40 => "You are young adult",
    default => "You smells bad ⚰️"
};

// Arrays
$bestLanguages = ["php", "js", "pyton"];
// the way to add elements to the array, this will add "Java" at the end
$bestLanguages[] = "Java";

// asociative arrays
$person = [
    "name" => "Lili",
    "age" => 78,
    "isDev" => false,
    "job" => "baker",
    "children" => ["janel", "braider"]
]

?>

<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>

</ul>

<?php if ($name) : ?>
    <h2>Hello man <?= $name ?></h2>
<?php elseif ($dbl) :  ?>
    <h2>Float <?= $dbl ?></h2>
<?php else : ?>

<?php endif; ?>

<p><?= $isOld ?></p>

<h1>
    <?= "Hello" . $name ?>
    <img src="<?= LOGO_URL ?>" alt="" />
</h1>

<h3><?= $outputAge ?></h3>

<h4><? $bestLanguages ?></h4>

<style>
    body {
        background-color: #222;
        color: #aaa
    }
</style>