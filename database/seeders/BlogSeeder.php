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
         'content'=>'September 24, 2021 (Friday) NCT 127 The 3rd Album "Sticker" [Jewel Case Ver.] (10 random types) on sale!',
         'user_id'=>1,
         'group_id'=>2,
       ]);
    }
}
