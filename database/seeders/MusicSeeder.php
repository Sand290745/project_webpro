<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Music::create([
            'name'=>'Welcome To My Playground - NEOCITY Ver.',
            'link'=>'H7pEXWm8-yc',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'90s Love MV',
            'link'=>'A5H8zBb3iao',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'Work It',
            'link'=>'Un7choIyl_g',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'RESONANCE',
            'link'=>'0IpbvXVbBYA',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'Lemonade',
            'link'=>'MmUNXU77waQ',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'Sticker',
            'link'=>'1oYWnbTSang',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'Highway to Heaven',
            'link'=>'iFoqGyWhMws',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'Life Is Still Going On',
            'link'=>'aq2epFJ4fR4',
            'group_id'=>2,
            'unit_id'=>2,
        ]);

        Music::create([
            'name'=>'Hello Future',
            'link'=>'QPUjV7epJqE',
            'group_id'=>2,
            'unit_id'=>2,
        ]);

        Music::create([
            'name'=>'Ridin',
            'link'=>'vofjeJvRT9c',
            'group_id'=>2,
            'unit_id'=>2,
        ]);


        Music::create([
            'name'=>'Kick Back',
            'link'=>'5h3sIRrQHJE',
            'group_id'=>2,
            'unit_id'=>4,
        ]);
        
        Music::create([
            'name'=>'Take Off',
            'link'=>'irXZve4QRos',
            'group_id'=>2,
            'unit_id'=>4,
        ]);

        Music::create([
            'name'=>'Turn Back Time',
            'link'=>'eUCVRF6hjSQ',
            'group_id'=>2,
            'unit_id'=>4,
        ]);

        Music::create([
            'name'=>'I LOVE YOU',
            'link'=>'_hFarg-Obuc',
            'group_id'=>3,
            'unit_id'=>8,
        ]);

        Music::create([
            'name'=>'BEAUTIFUL',
            'link'=>'UKXeico0yeI',
            'group_id'=>3,
            'unit_id'=>8,
        ]);

        Music::create([
            'name'=>'Going Crazy',
            'link'=>'u01r0O5WsEo',
            'group_id'=>3,
            'unit_id'=>8,
        ]);


        Music::create([
            'name'=>'Paradise',
            'link'=>'YFrjy7uAS48',
            'group_id'=>1,
            'unit_id'=>5,
        ]);

        Music::create([
            'name'=>'Peter Pan',
            'link'=>'Svmb3MvlNoM',
            'group_id'=>1,
            'unit_id'=>5,
        ]);
        
        Music::create([
            'name'=>'Hey Mama',
            'link'=>'AOzVyVv1HtQ',
            'group_id'=>1,
            'unit_id'=>6,
        ]);

        Music::create([
            'name'=>'Ka-CHING!',
            'link'=>'XNwYapPXNkw',
            'group_id'=>1,
            'unit_id'=>6,
        ]);

        Music::create([
            'name'=>'Closer to you',
            'link'=>'GjO4inIuPZo',
            'group_id'=>1,
            'unit_id'=>7,
        ]);

        Music::create([
            'name'=>'Telephone',
            'link'=>'5Lw38CVAVxw',
            'group_id'=>1,
            'unit_id'=>7,
        ]);

    }
}
