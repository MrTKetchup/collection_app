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
        
        $expectedOutput = 
            "<div class = 'circle'>
                <div class = 'card-stat-container'>
                    <h2> foo </h2>
                    <p class = 'card-stat'>Artist: bar </p>
                    <p class = 'card-stat'>Year: 1970 </p>
                    <p class = 'card-stat'>Record label:</p>
                    <p class = 'card-stat'> zoo </p>
                    <p class = 'card-stat'>Number of Tracks: 42 </p>
                </div>
            </div>";
        $actualOutput = $testRecord->create_record_card();

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}