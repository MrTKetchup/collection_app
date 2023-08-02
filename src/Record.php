<?php

class Record {

    private string $albumName;
    private string $artistName;
    private int $year;
    private string $recordLabel;
    private int $numberOfTracks;

    public function __construct(string $albumName, string $artistName, int $year, string $recordLabel, int $numberOfTracks) 
    {
        $this->albumName = $albumName;
        $this->artistName = $artistName;
        $this->year = $year;
        $this->recordLabel = $recordLabel;
        $this->numberOfTracks = $numberOfTracks;
    }

    public function createRecordCard(): string 
    {
        return 
            '<div class="circle">
                <div class="card-stat-container">
                    <h2>' . $this->albumName . '</h2>
                    <p class="card-stat">Artist: ' . $this->artistName . '</p>
                    <p class="card-stat">Year: ' . $this->year . '</p>
                    <p class="card-stat">Record label:</p>
                    <p class="card-stat">' . $this->recordLabel . '</p>
                    <p class="card-stat">Number of Tracks: ' . $this->numberOfTracks . '</p>
                </div>
            </div>';
    }
}