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
            'name'=>'Make A Wish (Birthday Song)',
            'link'=>'tyrVtwE8Gv0',
            'group_id'=>2,
            'unit_id'=>3,
        ]);
    }
}
