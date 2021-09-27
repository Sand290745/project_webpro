<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitHasArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>2,
            'artist_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
