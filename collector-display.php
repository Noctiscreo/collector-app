<?php

$db = new PDO('mysql:host=db;dbname=monsters', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT `Name`, `Weapon`, `Challenge` FROM `monsters`');
$monsters = $query->fetchALL();

foreach($monsters as $monster) {
    echo '<div>';
    echo '<h3>Name: ' . $monster['Name'] . '</h3>';
    echo '<p>Weapon: ' . $monster['Weapon'] . '</p>';
    echo '<p>Challenge: ' . $monster['Challenge'] . '</p>';
    echo '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collector</title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="boilerplate.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width= device-width, initial-scale=1">
</head>

<body>

<form method="post" action="add-monster.php">
    <h1>Add a New Monster</h1>
    <h3>Monster Name</h3>
    <input type="text" name="name">
    <p>Weapon</p>
    <input type="text" name="weapon">
    <p>Challenge</p>
    <input type="number" step="0.125" min="0.125" max="30" name="challenge">
    <input type="submit" value="Add Monster">
</form>
</body>



