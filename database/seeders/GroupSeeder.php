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
            'logo'=> 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Exo-logo-v-neck_design2.jpg',
            'fandom'=>'EXO-L',
            'company_id' => 1,
        ]);

        Group::create([
            'name'=>'NCT',
            'logo'=>'https://cdn.nct2020.com/images/logo_main.png',
            'fandom'=>'NCTzens',
            'company_id'=>1,
        ]);

        Group::create([
              'name'=>'TREASURE',
              'logo'=>'https://i.pinimg.com/474x/1a/70/c4/1a70c46bd69a9204f60d86df8bedef24.jpg',
              'fandom'=>'TREASURE MAKER',
              'company_id'=>2,
        ]);
    }
}
