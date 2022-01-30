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
    
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(MusicTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(UnitsHasArtistsTableSeeder::class);
        $this->call(TrixRichTextsTableSeeder::class);   
       
    }
}
