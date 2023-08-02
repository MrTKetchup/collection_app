<?php

$db = new PDO('mysql:host=db;dbname=record_collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `album_name`, `artist_name`, `year`, `record_label`, `number_of_tracks` FROM `albums`');
$query ->execute([]);

require_once('src/Record.php');

$record_collection = $query->fetchAll();
?>
<html lang = "en-GB">
    <head>
        <title>My Record Collection</title>
        <link rel='stylesheet' type='text/css' href='src/style.css'>
    </head>
    <body>
        <section class = 'heading'>
            <h1>My Record Collection</h1>
        </section>
        <section class = 'card-container'>
            <?php
                foreach ($record_collection as $record) {
                    $record = new Record ($record['album_name'], $record['artist_name'], $record['year'], $record['record_label'], $record['number_of_tracks']);

                    echo ($record->create_record_card());
                }
            ?>
            <div class = 'circle'>
                <div class='card'>
                    <div class='card-stat-container'>
                        <h2 class='card-heading'> $this->album_name </h2>
                        <p class='card-stat'>Artist: $this->artist_name </p>
                        <p class='card-stat'>Year: $this->year </p>
                        <p class='card-stat'>Record label: $this->record_label </p>
                        <p class='card-stat'>Number of Tracks: $this->number_of_tracks </p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>