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

           Artist::create([
            'name'=>'Kun',
            'birthday'=>'1996-01-01',
            'position'=>'Leader of WayV, Vocalist, Rapper',
            'zodiac'=>'Capricorn',
            'weight'=>60  ,
            'height'=>176,
            'blood_type'=>'B',
            'instagram'=>'kun11xd',
            'ideal'=>'null',
            'photo'=>'https://pbs.twimg.com/media/EnmLz22XcAAcBek?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>'Doyoung',
            'birthday'=>'1996-02-01',
            'position'=>' Vocalist',
            'zodiac'=>'Aquarius',
            'weight'=>60 ,
            'height'=>178,
            'blood_type'=>'B',
            'instagram'=>'do0_nct',
            'ideal'=>'Someone who is polite.',
            'photo'=>'https://pbs.twimg.com/media/EnmGM9YUYAE_UxX?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>'Ten ',
            'birthday'=>'1996-02-27',
            'position'=>' Dancer, Rapper, Vocalist',
            'zodiac'=>'Pisces',
            'weight'=>59 ,
            'height'=>172,
            'blood_type'=>'A',
            'instagram'=>'tenlee_1001',
            'ideal'=>'he does not have an ideal type and he “likes a relationship which starts from learning about each other before developing to love”',
            'photo'=>'https://pbs.twimg.com/media/EnmHT6uVcAA136Q?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           
           Artist::create([
            'name'=>'jaehyun ',
            'birthday'=>'1997-02-14',
            'position'=>' Dancer, Rapper, Visual,Vocalist',
            'zodiac'=>'Aquarius',
            'weight'=>63,
            'height'=>180,
            'blood_type'=>'A',
            'instagram'=>'_jeongjaehyun',
            'ideal'=>' Women with straight and long hair. Someone who can communicate well with him. Someone who is kind. Someone he can depend on. Someone healthy and into sports. Someone who is usually calm but can also be cute. He doesn’t care if that person is older or younger.',
            'photo'=>'https://pbs.twimg.com/media/EnmKjoeVoAAEP7t?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Winwin ',
            'birthday'=>'1997-10-28',
            'position'=>' Dancer, Vocalist, Rapper, Visual ',
            'zodiac'=>'Scorpio',
            'weight'=>60,
            'height'=>179,
            'blood_type'=>'B',
            'instagram'=>'wwiinn_7',
            'ideal'=>' Someone who has long black hair.',
            'photo'=>'https://pbs.twimg.com/media/EnmKjnzUUAAAsSr?format=jpg&name=4096x4096',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Suho ',
            'birthday'=>'1991-03-22',
            'position'=>' Leader, Lead Vocalist',
            'zodiac'=>'Gemini',
            'weight'=>0,
            'height'=>172,
            'blood_type'=>'AB',
            'instagram'=>'kimjuncotton',
            'ideal'=>' is a girl with literary interests and has long straight hair.',
            'photo'=>'https://i.pinimg.com/564x/b3/e0/01/b3e00156dbf258d619273d56b4e4e56c.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>' Baekhyun ',
            'birthday'=>'1992-03-06',
            'position'=>' Main Vocalist',
            'zodiac'=>'Taurus',
            'weight'=>53,
            'height'=>174,
            'blood_type'=>'O',
            'instagram'=>'baekhynee_exo',
            'ideal'=>' is a woman full of charms..',
            'photo'=>'https://i.pinimg.com/564x/f0/4d/5d/f04d5dc75a8fc69b98ea7fa389ec3628.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Chanyeol',
            'birthday'=>'1992-12-27',
            'position'=>'Main Rapper, Vocalist, Visual',
            'zodiac'=>' Sagittarius',
            'weight'=>0,
            'height'=>186,
            'blood_type'=>'A',
            'instagram'=>'real_pcy',
            'ideal'=>' is someone who is sincere, cute, and smiles a lot.',
            'photo'=>'https://i.pinimg.com/564x/55/5c/a5/555ca5d7da1b1edd707d7b99bc40d05e.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>' Sehun',
            'birthday'=>'1994-04-12',
            'position'=>'Lead Dancer, Rapper, Sub-Vocalist, Visual, Maknae',
            'zodiac'=>'Aries',
            'weight'=>0,
            'height'=>183,
            'blood_type'=>'O',
            'instagram'=>'oohsehun',
            'ideal'=>'is a woman that is kind.',
            'photo'=>'https://i.pinimg.com/564x/ee/86/b1/ee86b15289075835160f6adb9b332199.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Xiumin',
            'birthday'=>'1990-04-26',
            'position'=>'Sub Vocalist,Sub Rapper',
            'zodiac'=>'Aries',
            'weight'=>53,
            'height'=>173,
            'blood_type'=>'B',
            'instagram'=>'e_xiu_o',
            'ideal'=>'is someone who is hug-able and can give comfort to others.',
            'photo'=>'https://i.pinimg.com/564x/0e/0a/0e/0e0a0eefb63b86ff196569deb43d476f.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Chen',
            'birthday'=>'1992-09-21',
            'position'=>'Main Vocalist',
            'zodiac'=>'Virgo',
            'weight'=>60,
            'height'=>173,
            'blood_type'=>'B',
            'instagram'=>'null',
            'ideal'=>' is someone who is like a noona: someone that would take good care of him.',
            'photo'=>'https://i.pinimg.com/564x/0e/0a/0e/0e0a0eefb63b86ff196569deb43d476f.jpg',
            'group_id'=>1,
           ]);



           


    }
}
