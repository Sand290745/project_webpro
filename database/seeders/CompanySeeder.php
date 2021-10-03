<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/b/b7/SMENTERTAINMENT_LOGO.jpg',
            'name' => 'SM Entertainment',
            'other_name' => 'S.M. Entertainment',
            'founded' => 'February 14, 1995 (SM Entertainment)',
            'founder' => 'Lee Soo Man',
            'location' => 'Seoul, South Korea',
            'description' => 'Sales and revenues from SM Entertainment make it the first most successful agency in Korea, and a part of the Big 3 agencies. SM Entertainment distributes through various companies in different international locations. ',
        ]);

        Company::create([
            'logo' => 'https://s.isanook.com/jo/0/ud/486/2431685/wiki-background.jpg',
            'name' => 'YG Entertainment',
            'other_name' => 'YGE',
            'founded' => 'February 24, 1996',
            'founder' => 'Yang Hyun Suk',
            'location' => 'Seoul, South Korea',
            'description' => 'It is currently home to idol groups such as BIGBANG, WINNER, iKON, BLACKPINK, in addition to numerous non-idol groups and solo artists. Sales and revenues from the company make it one of the most successful agency in Korea, and a part of the Big 3 agencies.',
        ]);
    }
}
