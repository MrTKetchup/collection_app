<?php

$db = new PDO('mysql:host=db;dbname=record_collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `id`, `album_name`, `artist_name`, `year`, `record_label`, `number_of_tracks` FROM `albums`");
$query ->execute([]);

$record_collection = $query->fetchAll();
?>

<head>
    <title>My Record Collection</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
