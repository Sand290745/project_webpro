<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Group;
use Illuminate\Database\Seeder;
use UnitHasArtistTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CompanySeeder::class,
            GroupSeeder::class,
            UnitSeeder::class,
            ArtistSeeder::class,
            MusicSeeder::class,
            BlogSeeder::class,
            UnitHasArtistSeeder::class,
        ]);
    
    }
}
