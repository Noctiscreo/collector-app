<?php
require_once 'collector-function.php';
$db = new PDO('mysql:host=db;dbname=monsters', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT `Name`, `Weapon`, `Challenge` FROM `monsters`');
$monsters = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collector</title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="collector-app.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width= device-width, initial-scale=1">
</head>

<body>
    <h1>Monster List</h1>

<?php echo monsterDisplay($monsters); ?>

<form class="add" method="post" action="add-monster.php">
    <h1>Add a New Monster</h1>
    <h3>Name</h3>
    <input type="text" name="name">
    <p>Weapon</p>
    <input type="text" name="weapon">
    <p>Challenge</p>
    <input class="challenge" type="number" step="0.125" min="0.125" max="30" name="challenge">
    <input type="submit" value="Add Monster">
</form>
</body>



