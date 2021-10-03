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
         'photo'=>'https://i.pinimg.com/564x/c5/14/d5/c514d5d7669540e28cdbc0fc15fdc7e8.jpg',
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
            'photo'=>'https://cdni-hw.bugaboo.tv/dm/sz-md/i/images/2021/07/15/close_up_image_of_taeil_moon_in_woods_tcm25_667206_1626344876_4827.jpg',
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
            'photo'=>'https://obs.line-scdn.net/0hlNTyWl4FM2FpABk0s0pMNlNWMA5abCBiDTZiYjVubVUWMndiU2YpD0oIaQFEY3Q_BzZ8BE0DKFBMNyBgAWcp/w644',
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
            'photo'=>'https://us-fbcloud.net/quiz/data/34/34610.qst0.question.jpg',
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
            'photo'=>'https://i.pinimg.com/736x/a9/82/1a/a9821ac3c38f78bbdb14a9d3b3f20a6a.jpg',
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
            'photo'=>'https://s.isanook.com/mv/0/ui/20/104725/do0_nct_122726671_196261411900608_380198602083598415_n_1604315096.jpg',
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
            'photo'=>'https://i.pinimg.com/474x/b8/fc/c6/b8fcc6dcc2e4e3fb060090248ed7587e.jpg',
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
            'photo'=>'https://i.pinimg.com/564x/30/33/18/3033188d009ad5fac8792f6af0c13076.jpg',
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
            'photo'=>'https://f.ptcdn.info/022/070/000/qcuk0znn5EZxzQDGgCA-s.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Jungwoo ',
            'birthday'=>'1998-02-19',
            'position'=>' Vocalist, Dancer ',
            'zodiac'=>'Pisces',
            'weight'=>58,
            'height'=>180,
            'blood_type'=>'AB',
            'instagram'=>'ncit_kimjw',
            'ideal'=>'',
            'photo'=>'https://www.thebangkokinsight.com/wp-content/uploads/2020/01/batch_3-10.jpeg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Lucas ',
            'birthday'=>'1999-01-25',
            'position'=>' Rapper, Vocalist, Visual, Center of WayV ',
            'zodiac'=>'Aquarius',
            'weight'=>64,
            'height'=>183,
            'blood_type'=>'O',
            'instagram'=>'lucas_xx444',
            'ideal'=>'',
            'photo'=>'https://lifestyle.campus-star.com/app/uploads/2019/03/Lucas-NCT-2.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Mark Lee',
            'birthday'=>'1999-08-02',
            'position'=>' Leader of NCT Dream, Rapper, Dancer, Vocalist  ',
            'zodiac'=>'Leo',
            'weight'=>61,
            'height'=>175,
            'blood_type'=>'A',
            'instagram'=>'onyourm__ark',
            'ideal'=>' Someone who has long black hair ',
            'photo'=>'https://f.ptcdn.info/500/069/000/qap19upaxATESlj0tWL-o.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Xiaojun ',
            'birthday'=>'1999-08-08',
            'position'=>' Vocalist ',
            'zodiac'=>'Leo',
            'weight'=>0,
            'height'=>172,
            'blood_type'=>'A',
            'instagram'=>'djxiao_888',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/7a/93/5f/7a935f207a458314caedc18ed43b21db.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Hendery ',
            'birthday'=>'1999-09-28',
            'position'=>' Dancer, Rapper, Vocalist, Visual  ',
            'zodiac'=>'Libra',
            'weight'=>0,
            'height'=>175,
            'blood_type'=>'O',
            'instagram'=>'i_m_hendery',
            'ideal'=>'',
            'photo'=>'https://pbs.twimg.com/media/Dv5NP5uVYAIKXa_.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Renjun ',
            'birthday'=>'2000-03-23',
            'position'=>' Vocalist, Dancer ',
            'zodiac'=>'Aries',
            'weight'=>57,
            'height'=>171,
            'blood_type'=>'O',
            'instagram'=>'yellow_3to3 ',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/9f/13/d4/9f13d4865ecc21b3727b02e9a4529686.jpg',
            'group_id'=>2,
           ]);

           
           Artist::create([
            'name'=>' Jeno ',
            'birthday'=>'2000-04-23',
            'position'=>' Dancer, Rapper, Vocalist, Visual  ',
            'zodiac'=>'Taurus',
            'weight'=>59,
            'height'=>176,
            'blood_type'=>'A',
            'instagram'=>'',
            'ideal'=>'',
            'photo'=>'https://howtowearing.com/wp-content/uploads/2020/11/15-3.jpg',
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
            'photo'=>'https://cms.dmpcdn.com/musicarticle/2021/02/17/4cfb15e0-7109-11eb-85b4-d74ed7823c07_original.png',
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
            'ideal'=>'',
            'photo'=>'https://image.makewebeasy.net/makeweb/0/oEzbICNVY/A119PRO/7_13.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Jihoon',
            'birthday'=>'2000-03-14',
            'position'=>'Co-Leader, Main Dancer, Lead Vocalist',
            'zodiac'=>'Pisces',
            'weight'=> 69,
            'height'=>178,
            'blood_type'=>'B',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://pbs.twimg.com/media/EhwrE5UU0AI3PhS.jpg',
            'group_id'=>3,
           ]);
    }
}
