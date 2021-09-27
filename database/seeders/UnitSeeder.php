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
            'logo'=>'',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'NCTDream',
            'logo'=>'',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'NCTU',
            'logo'=>'',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'Wayv',
            'logo'=>'',
            'group_id'=>2,
        ]);

        Unit::create([
            'name'=>'EXO-CBX',
            'logo'=>'',
            'group_id'=>1,
        ]);

        Unit::create([
            'name'=>'SC',
            'logo'=>'',
            'group_id'=>1,
        ]);

        
    }
}
