<?php

require_once('../src/Record.php');

use PHPUnit\Framework\TestCase;

class RecordTest extends TestCase {

    public function test_create_record_card_success() 
    {
        $album_name = 'foo';
        $artist_name = 'bar';
        $year = 1970;
        $record_label = 'zoo';
        $number_of_tracks = 42;
        
        $testRecord = new Record($album_name, $artist_name, $year, $record_label, $number_of_tracks);

        // $this->album_name = $album_name;
        // $this->artist_name = $artist_name;
        // $this->year = $year;
        // $this->record_label = $record_label;
        // $this->number_of_tracks = $number_of_tracks;
        
        $testRecord->create_record_card();

        $this->assertEquals(
            "<div class='card'>
                    <div class='card-banner-container'>
                    <h2 class='card-heading'> foo </h2>
                </div>
                <div class='card-stat-container'>
                    <p class='card-stat'>Artist: bar </p>
                    <p class='card-stat'>Year: 1970 </p>
                    <p class='card-stat'>Record label: zoo </p>
                    <p class='card-stat'>Number of Tracks: 42 </p>
                </div>
            </div>", $testRecord
        );
    }
}