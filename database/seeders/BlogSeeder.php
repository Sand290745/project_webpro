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
         'title'=>'NCT 127 The 3rd Album "Sticker" ',
         'photo'=>'https://cf.shopee.co.th/file/64b19c6b12501c1a7fbd1b23a37eb02e',
         'user_id'=>1,
         'group_id'=>2,
       ]);

       Blog::create([
        'title'=>'NCT DREAM Hello Future - The 1st Album Repackages" ',
        'photo' => 'https://my-live-05.slatic.net/p/7b3707a08ee916d0c7566495ff7fbb9a.jpg_2200x2200q80.jpg_.webp',
        'user_id'=>1,
        'group_id'=>2,
      ]);

      Blog::create([
        'title'=>'NCT 2020 - Album NCT 2020 : RESONANCE',
        'photo'=>'https://pbs.twimg.com/media/EnhCbbTUYAEcAf6?format=jpg&name=4096x4096',
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
