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
        Artist::create([
         'name'=>'Taeyong',
         'birthday'=>'1995-07-01',
         'position'=>'Leader',
         'zodiac'=>'Cancer',
         'weight'=>58 ,
         'height'=>174,
         'blood_type'=>'O',
         'instagram'=>'taeoxo_nct',
         'emoij'=>'🌹',
         'ideal'=>'Someone who can teach me,leadme,and make up for my flaws',
         'photo'=>'https://pbs.twimg.com/media/D_gIUKlVAAAfZ64.jpg',
         'group_id'=>1,
        ]);
    }
}
