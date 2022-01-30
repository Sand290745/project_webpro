<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SM Entertainment',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/b/b7/SMENTERTAINMENT_LOGO.jpg',
                'other_name' => 'S.M. Entertainment',
            'founded' => 'February 14, 1995 (SM Entertainment)',
                'founder' => 'Lee Soo Man',
                'location' => 'Seoul, South Korea',
                'description' => 'Sales and revenues from SM Entertainment make it the first most successful agency in Korea, and a part of the Big 3 agencies. SM Entertainment distributes through various companies in different international locations.',
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-24 17:04:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'YG Entertainment',
                'logo' => 'https://s.isanook.com/jo/0/ud/486/2431685/wiki-background.jpg',
                'other_name' => 'YGE',
                'founded' => 'February 24, 1996',
                'founder' => 'Yang Hyun Suk',
                'location' => 'Seoul, South Korea',
                'description' => 'It is currently home to idol groups such as BIGBANG, WINNER, iKON, BLACKPINK, in addition to numerous non-idol groups and solo artists. Sales and revenues from the company make it one of the most successful agency in Korea, and a part of the Big 3 agencies.',
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'BigHit Music',
                'logo' => 'https://pbs.twimg.com/media/E1klPMCUcAgyv9D.jpg',
                'other_name' => 'Big Hit Entertainment',
            'founded' => 'February 1, 2005 (as Big Hit Entertainment) , March 31, 2021 (as Big Hit Music)',
                'founder' => 'Bang Si-hyuk',
                'location' => 'Seoul, South Korea',
                'description' => 'BigHit Music is a South Korean record label. It was founded in 2021 following Big Hit Entertainment\'s rebranding to HYBE and the company setting up a separate music label as part of HYBE Labels.',
                'created_at' => '2021-10-24 08:00:16',
                'updated_at' => '2021-10-24 08:02:59',
            ),
        ));
        
        
    }
}