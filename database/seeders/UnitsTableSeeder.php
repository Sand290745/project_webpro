<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'NCT127',
                'photo' => 'https://thestandard.co/wp-content/uploads/2021/09/NCT127_COVER-.jpg',
                'logo' => 'https://i.pinimg.com/736x/21/7f/82/217f82b10cee88eb792efd636b2ade1a.jpg',
                'group_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'NCTDream',
                'photo' => 'https://f.ptcdn.info/062/069/000/q91j5c6age4Ua5g7mZ5d-o.jpg',
                'logo' => 'https://pbs.twimg.com/media/E3SkO0IVgAc2lmw.png',
                'group_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'NCTU',
                'photo' => 'https://static.thairath.co.th/media/dFQROr7oWzulq5FZUIExKDyiFHiHDtBhupF2rTDdu0bGEjgWhyVuyovNGMznwDTnF6y.jpg',
                'logo' => 'https://i.pinimg.com/originals/6e/a9/db/6ea9db16b4501e8cb7e8c6bca22a5b1c.jpg',
                'group_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Wayv',
                'photo' => 'https://s.isanook.com/jo/0/ui/486/2430257/bb1914a634fcdca0223d5d11b3faa9de_1617492850.jpg',
                'logo' => 'https://pbs.twimg.com/media/ElYJ3QoUYAAMUn-.jpg',
                'group_id' => 2,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'EXO',
                'photo' => 'https://i1.wp.com/dudeplace.co/wp-content/uploads/2020/02/49174342_2427935050567908_8512092840950497280_o.jpg?fit=960%2C529&ssl=1',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Exo-logo-v-neck_design2.jpg',
                'group_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'EXO-CBX',
                'photo' => 'http://www.teroradio.com/2011/uploads/news/31951.jpg',
                'logo' => 'https://s20011.lnwfile.com/_e/k/_raw/n4/on/pr.jpg',
                'group_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'EXO-SC',
                'photo' => 'https://s.isanook.com/jo/0/rp/rc/w850h510/yacxacm1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2pvLzAvdWQvNDg0LzI0MjIyODkvc2VodW5jaGFueWVvbC10aGUxc3RhbC5qcGc=.jpg',
                'logo' => 'https://pbs.twimg.com/media/Eb2b2UoX0AEOOnP.jpg',
                'group_id' => 1,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'TREASURE',
                'photo' => 'https://images.workpointnews.com/workpointnews/2020/07/30104810/1596080885_97361_web-logo27may20207.jpg',
                'logo' => 'https://i.pinimg.com/474x/1a/70/c4/1a70c46bd69a9204f60d86df8bedef24.jpg',
                'group_id' => 3,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'BLACKPINK',
                'photo' => 'https://thestandard.co/wp-content/uploads/2021/06/POP_Blackpink2.jpg',
                'logo' => 'https://i2.wp.com/blackpinkupdate.com/wp-content/uploads/2020/06/BLACKPINK-Official-Logo-HD.jpg?fit=1000%2C1000&ssl=1',
                'group_id' => 4,
                'created_at' => '2021-10-24 07:10:23',
                'updated_at' => '2021-10-24 07:49:04',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'BTS',
                'photo' => 'https://i1.wp.com/www.korseries.com/wp-content/uploads/2021/05/BTS-Butter-2.png?resize=768%2C324&ssl=1',
                'logo' => 'https://i.pinimg.com/474x/5a/96/02/5a96028fc408d5a4adc2f82ce79ff794.jpg',
                'group_id' => 5,
                'created_at' => '2021-10-24 07:48:57',
                'updated_at' => '2021-10-24 08:36:32',
            ),
        ));
        
        
    }
}