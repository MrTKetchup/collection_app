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
<body>
    <section class = "heading">
        <h1>My Record Collection</h1>
    </section>
    <section class = "card-container">
    <div class="card">
					<div class="card-banner-container">
		    			<h2 class="card-heading">album-title</h3>
					</div>
					<div class="card-stat-container">
						<p class="card-stat">artist: artist-name</p>
						<p class="card-stat">year: year</p>
						<p class="card-stat">record-label: record-label</p>
						<p class="card-stat">number-of-tracks: track-number</p>
				    </div>
		    	</div>
    </section>
</body>