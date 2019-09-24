<?php

$db = new PDO('mysql:host=db;dbname=monsters', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT `Name`, `Weapon`, `Challenge` FROM `monsters`');
$monsters = $query->fetchAll();

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


</form>
</body>



