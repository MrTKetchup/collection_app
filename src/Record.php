<?php

class Record {

    public string $album_name;
    public string $artist_name;
    public int $year;
    public string $record_label;
    public int $number_of_tracks;

    public function __construct(string $album_name, string $artist_name, int $year, string $record_label, int $number_of_tracks) 
    {
        $this->album_name = $album_name;
        $this->artist_name = $artist_name;
        $this->year = $year;
        $this->record_label = $record_label;
        $this->number_of_tracks = $number_of_tracks;
    }

    public function create_record_card($album_name, $artist_name, $year, $record_label, $number_of_tracks) 
    {
        return 
            "<div class='card'>
                <div class='card-banner-container'>
                <h2 class='card-heading'>" . $album_name . "</h2>
            </div>
            <div class='card-stat-container'>
            <p class='card-stat'>Artist: " . $artist_name . "</p>
            <p class='card-stat'>Year: " . $year . "</p>
            <p class='card-stat'>Record label: " . $record_label . "</p>
            <p class='card-stat'>Number of Tracks: " . $number_of_tracks . "</p>
        </div>
    </div>"
    }
}