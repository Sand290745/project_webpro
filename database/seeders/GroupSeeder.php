<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'EXO',
            'logo'=> 'https://www.freelogovectors.net/wp-content/uploads/2021/09/exo-logo-freelogovectors.net_.png',
            'fandom'=>'EXO-L',
            'company_id' => 1,
        ]);

        Group::create([
            'name'=>'NCT',
            'logo'=>'',
            'fandom'=>'NCTzens',
            'company_id'=>1,
        ]);

        Group::create([
              'name'=>'TREAURE',
              'logo'=>'',
              'fandom'=>'MAKER',
              'company_id'=>2,
        ]);
    }
}
