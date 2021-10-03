<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name'=>'NCT127',
            'photo' => 'https://thestandard.co/wp-content/uploads/2021/09/NCT127_COVER-.jpg',
            'logo'=>'https://yt3.ggpht.com/kmRUAKKBmCmQBj3pIHrr4e7NqAPM0Jyzw_RaqWak4CaKUh7u5PG6958lRL0_vmUI4l32-eVt6w=s900-c-k-c0x00ffffff-no-rj',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'NCTDream',
            'photo' => 'https://f.ptcdn.info/062/069/000/q91j5c6age4Ua5g7mZ5d-o.jpg',
            'logo'=>'https://pbs.twimg.com/media/E3SkO0IVgAc2lmw.png',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'NCTU',
            'photo' =>'https://static.thairath.co.th/media/dFQROr7oWzulq5FZUIExKDyiFHiHDtBhupF2rTDdu0bGEjgWhyVuyovNGMznwDTnF6y.jpg',
            'logo'=>'https://i.pinimg.com/originals/6e/a9/db/6ea9db16b4501e8cb7e8c6bca22a5b1c.jpg',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'Wayv',
            'photo' => 'https://s.isanook.com/jo/0/ui/486/2430257/bb1914a634fcdca0223d5d11b3faa9de_1617492850.jpg',
            'logo'=>'https://pbs.twimg.com/media/ElYJ3QoUYAAMUn-.jpg',
            'group_id'=>2,
        ]);
        
        Unit::create([
            'name'=>'EXO',
            'photo' => 'https://i1.wp.com/dudeplace.co/wp-content/uploads/2020/02/49174342_2427935050567908_8512092840950497280_o.jpg?fit=960%2C529&ssl=1',
            'logo'=>'https://upload.wikimedia.org/wikipedia/commons/a/a2/Exo-logo-v-neck_design2.jpg',
            'group_id'=>1,
        ]);

        Unit::create([
            'name'=>'EXO-CBX',
            'photo' => 'http://www.teroradio.com/2011/uploads/news/31951.jpg',
            'logo'=>'https://s20011.lnwfile.com/_e/k/_raw/n4/on/pr.jpg',
            'group_id'=>1,
        ]);

        Unit::create([
            'name'=>'EXO-SC',
            'photo' => 'https://s.isanook.com/jo/0/rp/rc/w850h510/yacxacm1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2pvLzAvdWQvNDg0LzI0MjIyODkvc2VodW5jaGFueWVvbC10aGUxc3RhbC5qcGc=.jpg',
            'logo'=>'https://pbs.twimg.com/media/Eb2b2UoX0AEOOnP.jpg',
            'group_id'=>1,
        ]);

        Unit::create([
            'name'=>'TREASURE',
            'photo' => 'https://images.workpointnews.com/workpointnews/2020/07/30104810/1596080885_97361_web-logo27may20207.jpg',
            'logo'=>'https://i.pinimg.com/474x/1a/70/c4/1a70c46bd69a9204f60d86df8bedef24.jpg',
            'group_id'=>3,
        ]);

        
    }
}
