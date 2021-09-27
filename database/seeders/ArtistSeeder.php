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
         'ideal'=>'Someone who can teach me,leadme,and make up for my flaws',
         'photo'=>'https://pbs.twimg.com/media/D_gIUKlVAAAfZ64.jpg',
         'group_id'=>2,
        ]);

        Artist::create([
            'name'=>'Taeil',
            'birthday'=>'1994-06-14',
            'position'=>'Vocalist',
            'zodiac'=>'Gemini',
            'weight'=>60  ,
            'height'=>171,
            'blood_type'=>'O',
            'instagram'=>'mo.on_air',
            'ideal'=>'Someone cute. He prefers short bob hair style',
            'photo'=>'https://pbs.twimg.com/media/EnmJ8SdXYAkpz-J?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>'Johnny',
            'birthday'=>'1995-02-09',
            'position'=>'Dancer, Rapper, Vocalist',
            'zodiac'=>'Aquarius',
            'weight'=>70  ,
            'height'=>185,
            'blood_type'=>'B',
            'instagram'=>'johnnyjsuh',
            'ideal'=>'Someone who smiles at him a lot; a girl like Yoona (SNSD)',
            'photo'=>'https://pbs.twimg.com/media/EnmGVUGVgAAJnFG?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>'Yuta',
            'birthday'=>'1995-10-26',
            'position'=>'Dancer, Vocalist, Rapper',
            'zodiac'=>'Aquarius',
            'weight'=>70  ,
            'height'=>185,
            'blood_type'=>'B',
            'instagram'=>'johnnyjsuh',
            'ideal'=>'Someone who smiles at him a lot; a girl like Yoona (SNSD)',
            'photo'=>'https://pbs.twimg.com/media/EnmGVUGVgAAJnFG?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);
    }
}
