<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create( [
            'id'=>1,
            'title'=>'Thriller',
            'released'=>1982,
            'genre'=>'Pop, rock, R&B',
            'tcc'=>47.3,
            'sales'=>66,
            'cover'=>'thriller.png'
        ] );

        Album::create( [
            'id'=>2,
            'title'=>'Back in Black',
            'released'=>1980,
            'genre'=>'Hard rock',
            'tcc'=>26.4,
            'sales'=>50,
            'cover'=>'back-in-black.png'
        ] );

        Album::create( [
            'id'=>3,
            'title'=>'Bat Out of Hell',
            'released'=>1977,
            'genre'=>'Hard rock, glam rock, heavy metal',
            'tcc'=>21.7,
            'sales'=>50,
            'cover'=>'bat-out-of-hell.jpg'
        ] );

        Album::create( [
            'id'=>4,
            'title'=>'The Dark Side of the Moon',
            'released'=>1973,
            'genre'=>'Progressive rock',
            'tcc'=>24.2,
            'sales'=>45,
            'cover'=>'Dark_Side_of_the_Moon.png'
        ] );

        Album::create( [
            'id'=>5,
            'title'=>'The Bodyguard',
            'released'=>1992,
            'genre'=>'R&B, soul, pop, soundtrack',
            'tcc'=>28.4,
            'sales'=>45,
            'cover'=>'TheBodyguardSoundtrack.jpg'
        ] );

        Album::create( [
            'id'=>6,
            'title'=>'Their Greatest Hits (1971–1975)',
            'released'=>1976,
            'genre'=>'Country rock, soft rock, folk rock',
            'tcc'=>41.2,
            'sales'=>42,
            'cover'=>'Eagles_-_Their_Greatest_Hits_(1971-1975).jpg'
        ] );

        Album::create( [
            'id'=>7,
            'title'=>'Saturday Night Fever',
            'released'=>1977,
            'genre'=>'Disco',
            'tcc'=>21.6,
            'sales'=>40,
            'cover'=>'TheBeeGeesSaturdayNightFeveralbumcover.jpg'
        ] );

        Album::create( [
            'id'=>8,
            'title'=>'Rumours',
            'released'=>1977,
            'genre'=>'Soft rock',
            'tcc'=>27.9,
            'sales'=>40,
            'cover'=>'FMacRumours.png'
        ] );

        Album::create( [
            'id'=>9,
            'title'=>'Come On Over',
            'released'=>1997,
            'genre'=>'Country, pop',
            'tcc'=>29.6,
            'sales'=>40,
            'cover'=> null
        ] );
    }
}
