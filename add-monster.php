<?php
$db = new PDO('mysql:host=db;dbname=monsters', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query=$db->prepare('INSERT INTO `monsters`(`Name`, `Weapon`, `Challenge`) VALUES(:name, :weapon, :challenge)');

$query->execute(['name'=>$_POST['name'], 'weapon'=>$_POST['weapon'], 'challenge'=>$_POST['challenge']]);
header("location:index.php");