<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create( [
            'id'=>1,
            'name'=>'Michael Jackson',
            'image'=>'Michael_Jackson_in_1988.jpg'
        ] );



        Artist::create( [
            'id'=>2,
            'name'=>'AC/DC',
            'image'=>'ACDC_In_Tacoma_2009'
        ] );



        Artist::create( [
            'id'=>3,
            'name'=>'Meat Loaf',
            'image'=>'Meat_Loaf.jpg'
        ] );



        Artist::create( [
            'id'=>4,
            'name'=>'Pink Floyd',
            'image'=>'Pink_Floyd_-_all_members.jpg'
        ] );



        Artist::create( [
            'id'=>5,
            'name'=>'Whitney Houston',
            'image'=>'Whitney_Houston_Welcome_Home_Heroes.jpg'
        ] );



        Artist::create( [
            'id'=>6,
            'name'=>'Eagles',
            'image'=>'Eagles.jpg'
        ] );



        Artist::create( [
            'id'=>7,
            'name'=>'Bee Gees',
            'image'=>'Bee_Gees_1977.jpg'
        ] );



        Artist::create( [
            'id'=>8,
            'name'=>'Fleetwood Mac',
            'image'=>'Fleetwood_Mac_Billboard_1977.jpg'
        ] );



        Artist::create( [
            'id'=>9,
            'name'=>'Shania Twain',
            'image'=>'ShaniaTwainJunoAwardsMar2011.jpg'
        ] );


    }
}
