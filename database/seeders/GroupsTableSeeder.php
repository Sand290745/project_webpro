<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'EXO',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Exo-logo-v-neck_design2.jpg',
                'fandom' => 'EXO-L',
                'company_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'NCT',
                'logo' => 'https://cdn.nct2020.com/images/logo_main.png',
                'fandom' => 'NCTzens',
                'company_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TREASURE',
                'logo' => 'https://i.pinimg.com/474x/1a/70/c4/1a70c46bd69a9204f60d86df8bedef24.jpg',
                'fandom' => 'TREASURE MAKER',
                'company_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BLACKPINK',
                'logo' => 'https://i2.wp.com/blackpinkupdate.com/wp-content/uploads/2020/06/BLACKPINK-Official-Logo-HD.jpg?fit=1000%2C1000&ssl=1',
                'fandom' => 'BLINKS',
                'company_id' => 2,
                'created_at' => '2021-10-24 07:11:43',
                'updated_at' => '2021-10-24 07:11:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'BTS',
                'logo' => 'https://i.pinimg.com/474x/5a/96/02/5a96028fc408d5a4adc2f82ce79ff794.jpg',
                'fandom' => 'ARMY',
                'company_id' => 3,
                'created_at' => '2021-10-24 07:50:36',
                'updated_at' => '2021-10-24 08:03:13',
            ),
        ));
        
        
    }
}