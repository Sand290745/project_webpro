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
            'zodiac'=>'Scorpio',
            'weight'=>60,
            'height'=>176,
            'blood_type'=>'A',
            'instagram'=>'yuu_taa_1026',
            'ideal'=>'A girl who has short hair, 15 cm shorter than him, has empathy towards people and does not “act pretty”',
            'photo'=>'https://pbs.twimg.com/media/EnmLf7EW8AE3i0k?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);


           Artist::create([
            'name'=>'Suho',
            'birthday'=>'1991-05-22',
            'position'=>' Leader, Lead Vocalist',
            'zodiac'=>'Gemini',
            'weight'=> 0,
            'height'=>172,
            'blood_type'=>'AB',
            'instagram'=>'kimjuncotton',
            'ideal'=>'A girl with literary interests and has long straight hair',
            'photo'=>'https://kprofiles.com/wp-content/uploads/2019/11/ac1b813edd652daaac2b674ea67029d07e2b0cf3375378874a01eba9a6db6f2a.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Baekhyun',
            'birthday'=>'1992-05-6',
            'position'=>'Main Vocalist',
            'zodiac'=>'Taurus',
            'weight'=> 53,
            'height'=>174,
            'blood_type'=>'O',
            'instagram'=>'baekhyunee_exo',
            'ideal'=>'A woman full of charms',
            'photo'=>'https://kprofiles.com/wp-content/uploads/2019/11/d4d0f747361d0617ae6e9b795fb3379d930652d54b30fef5b696b598fdb105ef.jpg',
            'group_id'=>1,
           ]);


           Artist::create([
            'name'=>'Choi Hyunsuk',
            'birthday'=>'1999-04-21',
            'position'=>'Co-Leader, Main Rapper, Main Dancer',
            'zodiac'=>'Taurus',
            'weight'=> 58,
            'height'=>171,
            'blood_type'=>'A',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'A girl with literary interests and has long straight hair',
            'photo'=>'https://kprofiles.com/wp-content/uploads/2019/11/ac1b813edd652daaac2b674ea67029d07e2b0cf3375378874a01eba9a6db6f2a.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Jihoon',
            'birthday'=>'2000-03-14',
            'position'=>'Main Vocalist',
            'zodiac'=>'Pisces',
            'weight'=> 69,
            'height'=>178,
            'blood_type'=>'B',
            'instagram'=>'baekhyunee_exo',
            'ideal'=>'yg_treasure_official',
            'photo'=>'https://kprofiles.com/wp-content/uploads/2019/11/d4d0f747361d0617ae6e9b795fb3379d930652d54b30fef5b696b598fdb105ef.jpg',
            'group_id'=>3,
           ]);
    }
}
