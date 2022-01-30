<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('music')->delete();
        
        \DB::table('music')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Welcome To My Playground - NEOCITY Ver.',
                'link' => 'H7pEXWm8-yc',
                'group_id' => 2,
                'unit_id' => 3,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '90s Love MV',
                'link' => 'A5H8zBb3iao',
                'group_id' => 2,
                'unit_id' => 3,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Work It',
                'link' => 'Un7choIyl_g',
                'group_id' => 2,
                'unit_id' => 3,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Lemonade',
                'link' => 'MmUNXU77waQ',
                'group_id' => 2,
                'unit_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Sticker',
                'link' => '1oYWnbTSang',
                'group_id' => 2,
                'unit_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Highway to Heaven',
                'link' => 'iFoqGyWhMws',
                'group_id' => 2,
                'unit_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Life Is Still Going On',
                'link' => 'aq2epFJ4fR4',
                'group_id' => 2,
                'unit_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Hello Future',
                'link' => 'QPUjV7epJqE',
                'group_id' => 2,
                'unit_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Ridin',
                'link' => 'vofjeJvRT9c',
                'group_id' => 2,
                'unit_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Kick Back',
                'link' => '5h3sIRrQHJE',
                'group_id' => 2,
                'unit_id' => 4,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Take Off',
                'link' => 'irXZve4QRos',
                'group_id' => 2,
                'unit_id' => 4,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Turn Back Time',
                'link' => 'eUCVRF6hjSQ',
                'group_id' => 2,
                'unit_id' => 4,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'I LOVE YOU',
                'link' => '_hFarg-Obuc',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'BEAUTIFUL',
                'link' => 'UKXeico0yeI',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Going Crazy',
                'link' => 'u01r0O5WsEo',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Paradise',
                'link' => 'YFrjy7uAS48',
                'group_id' => 1,
                'unit_id' => 5,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Peter Pan',
                'link' => 'Svmb3MvlNoM',
                'group_id' => 1,
                'unit_id' => 5,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Hey Mama',
                'link' => 'AOzVyVv1HtQ',
                'group_id' => 1,
                'unit_id' => 6,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Ka-CHING!',
                'link' => 'XNwYapPXNkw',
                'group_id' => 1,
                'unit_id' => 6,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'Closer to you',
                'link' => 'GjO4inIuPZo',
                'group_id' => 1,
                'unit_id' => 7,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'Telephone',
                'link' => '5Lw38CVAVxw',
                'group_id' => 1,
                'unit_id' => 7,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'BTS: Butter | The Tonight Show Starring Jimmy Fallon',
                'link' => 'dnpC9YaosIY',
                'group_id' => 5,
                'unit_id' => 10,
                'created_at' => '2021-10-24 13:02:14',
                'updated_at' => '2021-10-24 13:09:22',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'EVERYDAY',
                'link' => '-dwPTpVCfe0',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-24 15:43:15',
                'updated_at' => '2021-10-24 15:43:57',
            ),
            23 => 
            array (
                'id' => 26,
            'name' => 'JUNKYU - Latch (Disclosure x Sam Smith Cover.)',
                'link' => 'FK_JV7iqokk',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-24 15:45:07',
                'updated_at' => '2021-10-24 15:48:43',
            ),
            24 => 
            array (
                'id' => 27,
            'name' => 'BANG YE DAM - HONESTY (Pink Sweat$ Cover.)',
                'link' => '1zKQyrMy3xE',
                'group_id' => 3,
                'unit_id' => 8,
                'created_at' => '2021-10-24 15:49:55',
                'updated_at' => '2021-10-24 15:51:24',
            ),
            25 => 
            array (
                'id' => 28,
            'name' => 'JISOO - \'HABITS (Stay High)\'',
                'link' => 'sLCstY_ZRac',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 15:52:36',
                'updated_at' => '2021-10-24 15:54:45',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'JENNIE - \'PRICELE$$\'',
                'link' => 'I9OmFz8RjX8',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 15:55:29',
                'updated_at' => '2021-10-24 15:55:29',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'Hello world . From Jennie',
                'link' => 'erYPvNbc_mc',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 15:56:20',
                'updated_at' => '2021-10-24 15:58:12',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'LILI\'s FILM - Vlog with JISOO',
                'link' => '_wOKXC05jl4',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 15:59:06',
                'updated_at' => '2021-10-24 15:59:41',
            ),
            29 => 
            array (
                'id' => 32,
            'name' => 'ROSÉ(로제) - GONE',
                'link' => 'U_N6-_Dce-A',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 16:00:56',
                'updated_at' => '2021-10-24 16:00:56',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'LILI\'s FILM - PERFORMANCE MAKING',
                'link' => 'hfax0J7A2Hk',
                'group_id' => 4,
                'unit_id' => 9,
                'created_at' => '2021-10-24 16:04:20',
                'updated_at' => '2021-10-24 16:04:39',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => '2021 BTS POP-UP : PERMISSION TO DANCE in SEOUL',
                'link' => 'HARM5E9SZSU',
                'group_id' => 5,
                'unit_id' => 10,
                'created_at' => '2021-10-24 16:07:06',
                'updated_at' => '2021-10-24 16:09:12',
            ),
            32 => 
            array (
                'id' => 35,
            'name' => 'BTS (방탄소년단) @ 63rd GRAMMY Awards',
                'link' => '41lSi2YSzA0',
                'group_id' => 5,
                'unit_id' => 10,
                'created_at' => '2021-10-24 16:09:59',
                'updated_at' => '2021-10-24 16:12:54',
            ),
            33 => 
            array (
                'id' => 36,
            'name' => 'BTS (방탄소년단) 2021 FESTA Family Portrait Shooting',
                'link' => 'tyrn764rWA4',
                'group_id' => 5,
                'unit_id' => 10,
                'created_at' => '2021-10-24 16:12:14',
                'updated_at' => '2021-10-24 16:13:00',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'NCT 2021 \'Beautiful\' MV',
                'link' => 'nAvjYapdSxk',
                'group_id' => 2,
                'unit_id' => 3,
                'created_at' => '2022-01-22 07:36:58',
                'updated_at' => '2022-01-22 07:36:58',
            ),
            35 => 
            array (
                'id' => 38,
            'name' => '\'Universe (Let\'s Play Ball)\' MV',
                'link' => 'SCK8yBLqQJc',
                'group_id' => 2,
                'unit_id' => 3,
                'created_at' => '2022-01-22 07:37:57',
                'updated_at' => '2022-01-22 07:37:57',
            ),
            36 => 
            array (
                'id' => 39,
            'name' => '\'Favorite (Vampire)\' MV',
                'link' => '7uxu4Z2HAnA',
                'group_id' => 2,
                'unit_id' => 1,
                'created_at' => '2022-01-22 07:39:10',
                'updated_at' => '2022-01-22 07:39:10',
            ),
        ));
        
        
    }
}