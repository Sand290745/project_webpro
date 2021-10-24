<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Blog::create([
         'title'=>'History of K-Pop: EXO',
         'photo'=>'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1574618788034-OEMI3N2UYN0PURZITB2D/HIST_EXO_HEADER.jpg?format=500w',
         'user_id'=>1,
         'group_id'=>1,
       ]);

       Blog::create([
        'title'=>'D.O. Makes Highly Anticipated Debut with 공감 (Empathy)',
        'photo' => 'https://images.squarespace-cdn.com/content/v1/56eb012f27d4bd29de975fae/1627435152092-IS9GEHT45QDW7W2APJTH/DB_DO_Header.jpg?format=500w',
        'user_id'=>1,
        'group_id'=>1,
      ]);

      Blog::create([
        'title'=>'Rosé Makes Her Solo Debut With R.',
        'photo'=>'https://nomnom-korea.com/wp-content/uploads/2021/03/blackpink0313-1024x570.png',
        'user_id'=>1,
        'group_id'=>2,
      ]);

      Blog::create([
        'title'=>'‘Obsession’ (EXO) Album Info ',
        'photo'=>'https://cf.shopee.co.th/file/ec3adecf5306d45c2e70c38c376e602b',
        'user_id'=>1,
        'group_id'=>2,
      ]);
    }
}
