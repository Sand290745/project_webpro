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
            'nationality' => 'Korean',
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
            'nationality' => 'Korean',
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
            'nationality' => 'Americans',
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
            'nationality' => 'Japanese',
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
            'nationality' => 'Chinese',
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
            'nationality' => 'Korean',
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
            'nationality' => 'Thai',
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
            'nationality' => 'Korean',
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
            'nationality' => 'Chinese',
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
            'nationality' => 'Korean',
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
            'nationality' => 'half Chinese and half Thai',
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
            'nationality' => 'Canadian',
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
            'nationality' => 'Chinese',
            'birthday'=>'1999-08-08',
            'position'=>' Vocalist ',
            'zodiac'=>'Leo',
            'weight'=>58,
            'height'=>172,
            'blood_type'=>'A',
            'instagram'=>'djxiao_888',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/7a/93/5f/7a935f207a458314caedc18ed43b21db.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Hendery ',
            'nationality' => 'Macanese',
            'birthday'=>'1999-09-28',
            'position'=>' Dancer, Rapper, Vocalist, Visual  ',
            'zodiac'=>'Libra',
            'weight'=>57,
            'height'=>175,
            'blood_type'=>'O',
            'instagram'=>'i_m_hendery',
            'ideal'=>'',
            'photo'=>'https://pbs.twimg.com/media/Dv5NP5uVYAIKXa_.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Renjun ',
            'nationality' => 'Chinese',
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
            'nationality' => 'Korean',
            'birthday'=>'2000-04-23',
            'position'=>' Dancer, Rapper, Vocalist, Visual  ',
            'zodiac'=>'Taurus',
            'weight'=>59,
            'height'=>176,
            'blood_type'=>'A',
            'instagram'=>'nct_dream',
            'ideal'=>'',
            'photo'=>'https://howtowearing.com/wp-content/uploads/2020/11/15-3.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Haechan ',
            'nationality' => 'Korean',
            'birthday'=>'2000-06-06',
            'position'=>' Vocalist, Dancer',
            'zodiac'=>'Gemini',
            'weight'=>58,
            'height'=>174,
            'blood_type'=>'AB',
            'instagram'=>'fullsun_ncit',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/4f/bb/8e/4fbb8e5fe658528784588e45da9655bf.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Jaemin ',
            'nationality' => 'Korean',
            'birthday'=>'2000-08-13',
            'position'=>' Rapper, Dancer, Vocalist, Visual',
            'zodiac'=>'Leo',
            'weight'=>58,
            'height'=>177,
            'blood_type'=>'AB',
            'instagram'=>'na.jaemin0813',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/66/ea/18/66ea1875c316a4487ee80e73519cead7.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=> 'Yangyang',
            'nationality' => 'Chinese',
            'birthday'=>'2000-10-10',
            'position'=>'Rapper, Dancer, Vocalist',
            'zodiac'=>'Libra',
            'weight'=>58,
            'height'=>174,
            'blood_type'=>'O',
            'instagram'=>'yangyang_x2',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/1e/7f/b5/1e7fb54778a925098407faca2294aaad.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=> 'Shotaro',
            'nationality' => 'Japanese',
            'birthday'=>'2000-11-25',
            'position'=>'Rapper, Dancer',
            'zodiac'=>'Sagittarius',
            'weight'=>57,
            'height'=>178,
            'blood_type'=>'A',
            'instagram'=>'_shotaroo_',
            'ideal'=>'',
            'photo'=>'https://pbs.twimg.com/media/EkbBt06U8AAI0Tg.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=> 'Sungchan',
            'nationality' => 'Korean',
            'birthday'=>'2001-09-13',
            'position'=>'Rapper',
            'zodiac'=>'Virgo',
            'weight'=>65,
            'height'=>185,
            'blood_type'=>'A',
            'instagram'=>'nct',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/93/af/f0/93aff01aeb7645bd58856ad10be56300.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=> 'Chenle',
            'nationality' => 'Chinese',
            'birthday'=>'2001-11-22',
            'position'=>'Vocalist',
            'zodiac'=>'Scorpio',
            'weight'=>58,
            'height'=>176,
            'blood_type'=>'O',
            'instagram'=>'nct_dream',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/d0/cc/9a/d0cc9a2f1ce53221cc6a4be8d0a8cfc7.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=> 'Jisung',
            'nationality' => 'Korean',
            'birthday'=>'2002-02-05',
            'position'=>'Dancer, Vocalist, Rapper, Maknae',
            'zodiac'=>'Aquarius',
            'weight'=>61,
            'height'=>180,
            'blood_type'=>'O',
            'instagram'=>'nct_dream',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/5d/40/6e/5d406ef781374fa2212df4b14e097f7b.jpg',
            'group_id'=>2,
           ]);

           Artist::create([
            'name'=>' Suho ',
            'nationality' => 'Korean',
            'birthday'=>'1991-03-22',
            'position'=>' Leader, Lead Vocalist',
            'zodiac'=>'Gemini',
            'weight'=>65,
            'height'=>173,
            'blood_type'=>'AB',
            'instagram'=>'kimjuncotton',
            'ideal'=>' A girl with literary interests and has long straight hair',
            'photo'=>'https://i.pinimg.com/564x/b3/e0/01/b3e00156dbf258d619273d56b4e4e56c.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>' Baekhyun ',
            'nationality' => 'Korean',
            'birthday'=>'1992-03-06',
            'position'=>' Main Vocalist',
            'zodiac'=>'Taurus',
            'weight'=>53,
            'height'=>174,
            'blood_type'=>'O',
            'instagram'=>'baekhynee_exo',
            'ideal'=>' A woman full of charms',
            'photo'=>'https://i.pinimg.com/564x/f0/4d/5d/f04d5dc75a8fc69b98ea7fa389ec3628.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Chanyeol',
            'nationality' => 'Korean',
            'birthday'=>'1992-12-27',
            'position'=>'Main Rapper, Vocalist, Visual',
            'zodiac'=>' Sagittarius',
            'weight'=>70,
            'height'=>186,
            'blood_type'=>'A',
            'instagram'=>'real_pcy',
            'ideal'=>' Someone who is sincere, cute, and smiles a lot',
            'photo'=>'https://i.pinimg.com/564x/55/5c/a5/555ca5d7da1b1edd707d7b99bc40d05e.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'D.O.',
            'nationality' => 'Korean',
            'birthday'=>'1993-01-12',
            'position'=>'Main Vocalist',
            'zodiac'=>' Capricorn',
            'weight'=>59,
            'height'=>173,
            'blood_type'=>'A',
            'instagram'=>'weareone.exo',
            'ideal'=>' A girl who is kind and eats well',
            'photo'=>'https://f.ptcdn.info/237/064/000/psariob2bes5O4yoPJa-o.jpg',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>'Kai',
            'nationality' => 'Korean',
            'birthday'=>'1994-01-14',
            'position'=>'Main Dancer, Lead Rapper, Vocalist, Center, Visual',
            'zodiac'=>' Capricorn',
            'weight'=>65,
            'height'=>182,
            'blood_type'=>'A',
            'instagram'=>'zkdlin',
            'ideal'=>' Someone like Han Ye Seul',
            'photo'=>'https://img.wattpad.com/e3582e5cdbb8b464523b93ef9caec664eb4cb162/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f4262684c637475302d53744d47513d3d2d313034393331313534312e313637323035356537613231323534353930343438363039313432312e706e67?s=fit&w=720&h=720',
            'group_id'=>1,
           ]);

           Artist::create([
            'name'=>' Sehun',
            'nationality' => 'Korean',
            'birthday'=>'1994-04-12',
            'position'=>'Lead Dancer, Rapper, Sub-Vocalist, Visual, Maknae',
            'zodiac'=>'Aries',
            'weight'=>63,
            'height'=>183,
            'blood_type'=>'O',
            'instagram'=>'oohsehun',
            'ideal'=>' A woman that is kind',
            'photo'=>'https://i.pinimg.com/564x/ee/86/b1/ee86b15289075835160f6adb9b332199.jpg',
            'group_id'=>1,
           ]);


           Artist::create([
            'name'=>'Xiumin',
            'nationality' => 'Korean',
            'birthday'=>'1990-04-26',
            'position'=>'Sub Vocalist,Sub Rapper',
            'zodiac'=>'Aries',
            'weight'=>53,
            'height'=>173,
            'blood_type'=>'B',
            'instagram'=>'e_xiu_o',
            'ideal'=>'Someone who is hug-able and can give comfort to others',
            'photo'=>'https://i.pinimg.com/564x/0e/0a/0e/0e0a0eefb63b86ff196569deb43d476f.jpg',
            'group_id'=>1,
           ]);


           Artist::create([
            'name'=>'Chen',
            'nationality' => 'Korean',
            'birthday'=>'1992-09-21',
            'position'=>'Main Vocalist',
            'zodiac'=>'Virgo',
            'weight'=>60,
            'height'=>173,
            'blood_type'=>'B',
            'instagram'=>'weareone.exo',
            'ideal'=>' Someone who is like a noona: someone that would take good care of him',
            'photo'=>'https://cms.dmpcdn.com/musicarticle/2021/02/17/4cfb15e0-7109-11eb-85b4-d74ed7823c07_original.png',
            'group_id'=>1,
           ]);


           Artist::create([
            'name'=>'Choi Hyunsuk',
            'nationality' => 'Korean',
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
            'nationality' => 'Korean',
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

           Artist::create([
            'name'=>'Yoshi',
            'nationality' => 'Japanese',
            'birthday'=>'2000-05-15',
            'position'=>'Rapper, Dancer',
            'zodiac'=>'Taurus',
            'weight'=> 66,
            'height'=>179,
            'blood_type'=>'A',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/a4/1c/6f/a41c6fd92e1069422fedfc7fef873a78.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Junkyu',
            'nationality' => 'Korean',
            'birthday'=>'2000-09-09',
            'position'=>'Vocalist, Visual',
            'zodiac'=>'Virgo',
            'weight'=> 65,
            'height'=>178,
            'blood_type'=>'O',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/aa/00/96/aa00968fe7e3dccff9000136a82d9439.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Mashiho',
            'nationality' => 'Japanese',
            'birthday'=>'2001-03-25',
            'position'=>'Main Dancer, Vocalist, Visual',
            'zodiac'=>'Aries',
            'weight'=> 60,
            'height'=>169,
            'blood_type'=>'AB',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/44/55/9b/44559bb7548531eea1620a7f6b2c73ce.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Yoon Jaehyuk',
            'nationality' => 'Korean',
            'birthday'=>'2001-07-23',
            'position'=>'Rapper, Vocalist',
            'zodiac'=>'Leo',
            'weight'=> 63,
            'height'=>178,
            'blood_type'=>'O',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/b7/33/c7/b733c75673132cf25edb82c6531e9efa.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Asahi',
            'nationality' => 'Japanese',
            'birthday'=>'2001-08-20',
            'position'=>'Vocalist, Visual',
            'zodiac'=>'Leo',
            'weight'=>57,
            'height'=>173,
            'blood_type'=>'AB',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://pbs.twimg.com/media/Eh28q05VgAAj7Mt.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Bang Yedam',
            'nationality' => 'Korean',
            'birthday'=>'2002-05-07',
            'position'=>'Main Vocalist',
            'zodiac'=>'Taurus',
            'weight'=>61,
            'height'=>172,
            'blood_type'=>'A',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/53/64/99/5364994f79a13e35f106ab3af54e9f81.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Doyoung',
            'nationality' => 'Korean',
            'birthday'=>'2003-12-04',
            'position'=>'Main Dancer, Vocalist',
            'zodiac'=>'Sagittarius',
            'weight'=>58,
            'height'=>177,
            'blood_type'=>'B',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/ec/1b/c6/ec1bc6660590888ae461fa0b60e7ee7c.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Haruto',
            'nationality' => 'Japanese',
            'birthday'=>'2004-04-05',
            'position'=>'Main Rapper, Visual',
            'zodiac'=>'Aries',
            'weight'=>65,
            'height'=>185,
            'blood_type'=>'B',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/originals/be/28/a4/be28a41e887178b2b68e6aa8016aeabb.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Park Jeongwoo',
            'nationality' => 'Korean',
            'birthday'=>'2004-09-28',
            'position'=>'Main Vocalist',
            'zodiac'=>'Libra',
            'weight'=>65,
            'height'=>180,
            'blood_type'=>'O',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/05/9d/c5/059dc56f312be5ec96ba1e17abe228ef.jpg',
            'group_id'=>3,
           ]);

           Artist::create([
            'name'=>'Junghwan',
            'nationality' => 'Korean',
            'birthday'=>'2005-02-18',
            'position'=>'Vocalist, Maknae',
            'zodiac'=>'Aquarius',
            'weight'=>67,
            'height'=>179,
            'blood_type'=>'B',
            'instagram'=>'yg_treasure_official',
            'ideal'=>'',
            'photo'=>'https://i.pinimg.com/564x/9d/db/12/9ddb129908fa270d651384c9c1f27607.jpg',
            'group_id'=>3,
           ]);
    }
}
