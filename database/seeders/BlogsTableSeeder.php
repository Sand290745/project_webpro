<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'History of K-Pop: EXO',
                'photo' => 'https://popcornfor2.com/upload/112/news-full-111046.jpg',
                'user_id' => 1,
                'group_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-24 12:47:17',
            ),
            1 => 
            array (
                'id' => 2,
            'title' => 'D.O. Makes Highly Anticipated Debut with 공감 (Empathy)',
                'photo' => 'https://i.ytimg.com/vi/_btxV8tJM7w/maxresdefault.jpg',
                'user_id' => 2,
                'group_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-24 12:44:07',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Rosé Makes Her Solo Debut With R.',
                'photo' => 'https://nomnom-korea.com/wp-content/uploads/2021/03/blackpink0313-1024x570.png',
                'user_id' => 1,
                'group_id' => 4,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-24 10:05:03',
            ),
            3 => 
            array (
                'id' => 4,
            'title' => 'NCT 127 and the Sticker Comeback — Don’t Judge a Book (Album) by its Cover (Title Song)',
                'photo' => 'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1632057133133-OE28U2CSGB9AFQLTBZYS/REV_NCT+127+Sticker_Header.jpg?format=1500w',
                'user_id' => 1,
                'group_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 14:34:24',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'LISA Introduces Herself in Debut Single “LALISA”',
                'photo' => 'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1631368068681-B89DT23SRQ62CKU1EUC7/DB_Lisa_Header.jpg?format=1500w',
                'user_id' => NULL,
                'group_id' => 4,
                'created_at' => '2021-10-24 10:16:35',
                'updated_at' => '2021-10-24 10:16:35',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'EXO and the “Obsession” Comeback',
                'photo' => 'https://i.ytimg.com/vi/uxmP4b2a0uY/maxresdefault.jpg',
                'user_id' => NULL,
                'group_id' => 1,
                'created_at' => '2021-10-24 11:16:09',
                'updated_at' => '2021-10-24 11:16:53',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'EXO and the “Love Shot” Comeback',
                'photo' => 'https://www.brighttv.co.th/wp-content/uploads/2020/08/EXO-1.png',
                'user_id' => NULL,
                'group_id' => 1,
                'created_at' => '2021-10-24 11:21:53',
                'updated_at' => '2021-10-24 12:38:51',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'BTS B-Sides',
                'photo' => 'https://img.i-scmp.com/cdn-cgi/image/fit=contain,width=1098,format=auto/sites/default/files/styles/1200x800/public/d8/images/canvas/2021/07/08/62d30fc0-81a2-4093-b5aa-182a94855233_386389bf.jpg?itok=394kwgGN&v=1625719813',
                'user_id' => NULL,
                'group_id' => 5,
                'created_at' => '2021-10-24 11:26:10',
                'updated_at' => '2021-10-24 11:26:10',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'BTS Connects with ARMY through Innovative Online Concert',
                'photo' => 'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1602529031429-38O4YJHAZ8YLCOJ5YP27/EVT_MOTS-ONE_Header.jpg?format=2500w',
                'user_id' => NULL,
                'group_id' => 5,
                'created_at' => '2021-10-24 11:36:58',
                'updated_at' => '2021-10-24 11:37:41',
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Idol Fashion: Jennie',
                'photo' => 'https://cdn.inkistyle.com/wp-content/uploads/2021/07/210729-Blackpink-Jennie-Fashion-Instagram-2-758x426.jpg',
                'user_id' => NULL,
                'group_id' => 4,
                'created_at' => '2021-10-24 11:49:09',
                'updated_at' => '2021-10-24 12:14:03',
            ),
            10 => 
            array (
                'id' => 12,
                'title' => 'History of K-Pop: BLACKPINK',
                'photo' => 'https://www.brighttv.co.th/wp-content/uploads/2020/06/blackpink-reality.png',
                'user_id' => NULL,
                'group_id' => 4,
                'created_at' => '2021-10-24 12:22:18',
                'updated_at' => '2022-01-22 07:33:30',
            ),
            11 => 
            array (
                'id' => 13,
                'title' => 'EXO Makes Their Grand Return With Special Album',
                'photo' => 'https://f.ptcdn.info/667/073/000/qtxe7k5qhJQdkJGELWu-o.jpg',
                'user_id' => NULL,
                'group_id' => 1,
                'created_at' => '2021-10-24 12:33:59',
                'updated_at' => '2021-10-24 12:33:59',
            ),
            12 => 
            array (
                'id' => 14,
                'title' => 'NCT Dream Spiced up the Entire K-Pop World With Their Seven Different Flavors',
                'photo' => 'https://www.hallyukstar.com/wp-content/uploads/2021/05/nctdream-hotsauce.jpg',
                'user_id' => NULL,
                'group_id' => 2,
                'created_at' => '2021-10-24 12:53:38',
                'updated_at' => '2021-10-24 12:53:38',
            ),
            13 => 
            array (
                'id' => 15,
                'title' => 'Throwback Thursday: A Summer with NCT Dream',
                'photo' => 'https://s.isanook.com/jo/0/ud/485/2429945/7dream.jpg',
                'user_id' => NULL,
                'group_id' => 2,
                'created_at' => '2021-10-24 12:59:59',
                'updated_at' => '2021-10-24 12:59:59',
            ),
            14 => 
            array (
                'id' => 17,
                'title' => 'TREASURE Says “I Love You” in New Music Video',
                'photo' => 'https://kpopreviewed.files.wordpress.com/2020/09/treasure_iloveyou.jpg?w=1200&h=649&crop=1',
                'user_id' => NULL,
                'group_id' => 3,
                'created_at' => '2021-10-24 15:10:30',
                'updated_at' => '2021-10-24 15:11:09',
            ),
            15 => 
            array (
                'id' => 18,
                'title' => 'TREASURE Sets off a New Global Sensation with Debut Single “BOY”',
                'photo' => 'https://images.workpointnews.com/workpointnews/2020/07/30104810/1596080885_97361_web-logo27may20207.jpg',
                'user_id' => NULL,
                'group_id' => 3,
                'created_at' => '2021-10-24 15:16:57',
                'updated_at' => '2021-10-24 15:16:57',
            ),
            16 => 
            array (
                'id' => 19,
                'title' => 'The Light 2020 Needed: BTS’s “Dynamite”',
                'photo' => 'https://cms.dmpcdn.com/musicarticle/2020/08/24/40bf7740-e5c1-11ea-be44-e7cc83edb953_original.jpg',
                'user_id' => NULL,
                'group_id' => 5,
                'created_at' => '2021-10-24 15:23:16',
                'updated_at' => '2021-10-24 15:23:16',
            ),
            17 => 
            array (
                'id' => 20,
                'title' => 'BLACKPINK’s Jennie Debuts with “SOLO”',
                'photo' => 'https://seoulbeats.com/wp-content/uploads/2018/12/20180212_seoulbeats_black_pink_jennie-1152x600.jpg',
                'user_id' => NULL,
                'group_id' => 4,
                'created_at' => '2021-10-24 15:27:11',
                'updated_at' => '2022-01-22 07:31:18',
            ),
            18 => 
            array (
                'id' => 21,
                'title' => 'History of K-Pop: TREASURE',
                'photo' => 'https://f.ptcdn.info/084/075/000/r0nrlwmapS7BOQsT1RV-o.jpg',
                'user_id' => NULL,
                'group_id' => 3,
                'created_at' => '2021-10-24 15:40:52',
                'updated_at' => '2021-10-24 15:40:52',
            ),
        ));
        
        
    }
}