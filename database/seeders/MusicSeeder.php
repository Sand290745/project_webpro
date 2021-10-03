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
            'name'=>'NCT U - 90s Love MV',
            'link'=>'A5H8zBb3iao',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'NCT U - Work It',
            'link'=>'Un7choIyl_g',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'NCT 2020 - RESONANCE',
            'link'=>'0IpbvXVbBYA',
            'group_id'=>2,
            'unit_id'=>3,
        ]);

        Music::create([
            'name'=>'NCT 127 - Lemonade',
            'link'=>'MmUNXU77waQ',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'NCT 127 - Sticker',
            'link'=>'1oYWnbTSang',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'NCT 127 - Highway to Heaven',
            'link'=>'iFoqGyWhMws',
            'group_id'=>2,
            'unit_id'=>1,
        ]);

        Music::create([
            'name'=>'NCT DREAM - Life Is Still Going On',
            'link'=>'aq2epFJ4fR4',
            'group_id'=>2,
            'unit_id'=>2,
        ]);

        Music::create([
            'name'=>'NCT DREAM - Hot Sauce',
            'link'=>'PkKnp4SdE-w',
            'group_id'=>2,
            'unit_id'=>2,
        ]);

        Music::create([
            'name'=>'NCT DREAM - Ridin',
            'link'=>'vofjeJvRT9c',
            'group_id'=>2,
            'unit_id'=>2,
        ]);


        Music::create([
            'name'=>'WayV - Kick Back',
            'link'=>'5h3sIRrQHJE',
            'group_id'=>2,
            'unit_id'=>4,
        ]);
        
        Music::create([
            'name'=>'WayV - Take Off',
            'link'=>'irXZve4QRos',
            'group_id'=>2,
            'unit_id'=>4,
        ]);

        Music::create([
            'name'=>'WayV - Turn Back Time',
            'link'=>'eUCVRF6hjSQ',
            'group_id'=>2,
            'unit_id'=>4,
        ]);

        Music::create([
            'name'=>'TREASURE - I LOVE YOU',
            'link'=>'_hFarg-Obuc',
            'group_id'=>3,
            'unit_id'=>8,
        ]);

        Music::create([
            'name'=>'TREASURE - BEAUTIFUL',
            'link'=>'UKXeico0yeI',
            'group_id'=>3,
            'unit_id'=>8,
        ]);

        Music::create([
            'name'=>'TREASURE - Going Crazy',
            'link'=>'u01r0O5WsEo',
            'group_id'=>3,
            'unit_id'=>8,
        ]);


        Music::create([
            'name'=>'EXO - Paradise',
            'link'=>'YFrjy7uAS48',
            'group_id'=>1,
            'unit_id'=>5,
        ]);

        Music::create([
            'name'=>'EXO - Peter Pan',
            'link'=>'Svmb3MvlNoM',
            'group_id'=>1,
            'unit_id'=>5,
        ]);
        
        Music::create([
            'name'=>'EXO-CBX - Hey Mama',
            'link'=>'AOzVyVv1HtQ',
            'group_id'=>1,
            'unit_id'=>6,
        ]);

        Music::create([
            'name'=>'EXO-CBX - Ka-CHING!',
            'link'=>'XNwYapPXNkw',
            'group_id'=>1,
            'unit_id'=>6,
        ]);

        Music::create([
            'name'=>'EXO-SC - Closer to you',
            'link'=>'GjO4inIuPZo',
            'group_id'=>1,
            'unit_id'=>7,
        ]);

        Music::create([
            'name'=>'EXO-SC - Telephone',
            'link'=>'5Lw38CVAVxw',
            'group_id'=>1,
            'unit_id'=>7,
        ]);

    }
}
