<?php

class Record {

    private string $album_name;
    private string $artist_name;
    private int $year;
    private string $record_label;
    private int $number_of_tracks;

    public function __construct(string $album_name, string $artist_name, int $year, string $record_label, int $number_of_tracks) 
    {
        $this->album_name = $album_name;
        $this->artist_name = $artist_name;
        $this->year = $year;
        $this->record_label = $record_label;
        $this->number_of_tracks = $number_of_tracks;
    }

    public function create_record_card() 
    {
        return 
            "<div class='card'>
                    <div class='card-banner-container'>
                    <h2 class='card-heading'> $this->album_name </h2>
                </div>
                <div class='card-stat-container'>
                    <p class='card-stat'>Artist: $this->artist_name </p>
                    <p class='card-stat'>Year: $this->year </p>
                    <p class='card-stat'>Record label: $this->record_label </p>
                    <p class='card-stat'>Number of Tracks: $this->number_of_tracks </p>
                </div>
            </div>";
    }
}