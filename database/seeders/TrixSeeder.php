<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trix_rich_texts')->insert([
            'field'=> 'content',
            'model_type'=> 'App\Models\Blog',
            'model_id' => 1,
            'content' => '<ol><li>Hello Future</li><li>Bungee</li><li>Hot Sauce</li><li>Life Is Still Going On</li><li>Dive Into You</li></ol>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('trix_rich_texts')->insert([
            'field'=> 'content',
            'model_type'=> 'App\Models\Blog',
            'model_id' => 2,
            'content' => '<div><a href="https://www.youtube.com/watch?v=1oYWnbTSang">Sticker</a></div><div><br></div><div><a href="https://www.youtube.com/watch?v=MmUNXU77waQ">Lemonade</a></div><div><br></div><div>Breakfast</div><div><br></div><div>Focus</div><div><br></div><div>The Rainy Night</div><div><br></div><div>Far</div><div><br></div><div>Bring The Noize</div><div><br></div><div>Magic Carpet Ride</div><div><br></div><div>Road Trip</div><div><br></div><div>Dreamer</div><div><br></div><div>Promise You</div>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('trix_rich_texts')->insert([
            'field'=> 'content',
            'model_type'=> 'App\Models\Blog',
            'model_id' => 3,
            'content' => '<div>NCT 2020 - Album NCT 2020 : RESONANCE Pt. 1&nbsp;<br>- CD&nbsp;<br>- Photobook Ver : The Past Ver. / The Future Ver.&nbsp;<br>- Wide folded poster : Random 1p out of 3p&nbsp;<br>- Lyrics : 1p&nbsp;<br>- Photocard : Random 1p out of 23p&nbsp;<br>- Bookcard : Random 1p out of 23p&nbsp;<br><br>NCT 2020 2nd Album - RESONANCE Pt. 2 (DEPARTURE VER.)&nbsp;<br>- CD - Photocard : Random 1 out of 23&nbsp;<br>- ID Card : Random 1 out of 23&nbsp;<br>- Sticker : Randoom 1 out of 3&nbsp;<br>- Folded Poster NCT 2020 2nd Album&nbsp;<br><br>- RESONANCE Pt. 2 ( Arrival Ver)&nbsp;<br>- CD&nbsp;<br>- PHOTOBOOK : 224p&nbsp;<br>- PHOTOCARD : Random 1p out of 23p&nbsp;<br>- ACCESS CARD : Random 1p out of 23p&nbsp;<br>- STICKER : Random 1p out of 2p&nbsp;<br>- FOLDED POSTER : 1p</div>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('trix_rich_texts')->insert([
            'field'=> 'content',
            'model_type'=> 'App\Models\Blog',
            'model_id' => 4,
            'content' => '<div><strong>‘Obsession’ </strong>is the 6th studio album by South Korean–Chinese boy band <strong>EXO</strong>. It was released on November 27th, 2019.&nbsp;<br><br>Artist: EXO<br> Released: November 27, 2019<br> Type: Studio album<br> Recorded: 2019<br> Genre: K-Pop, Hip Hop, Dance, Funk, R&amp;B<br> Length: 34:08<br> Label: SM Entertainment<br> Writer(s): Kenzie, Hwang Yoo-bin, JQ, Jo Yoon-kyung, Lee Seu-ran and others<br> Producer(s): Lee Soo-man and others&nbsp;<br><br>Track list<br> 1. Obsession (title) – 3:23<br> 2. Trouble – 3:17<br> 3. Jekyll – 3:41<br> 4. Groove – 3:28<br> 5. Ya Ya Ya – 3:42<br> 6. Baby You Are – 2:58<br> 7. Non Stop – 3:24<br> 8. Day After Day – 3:42<br> 9. Butterfly Effect – 3:10<br> 10. Obsession (Chinese version) – 3:23&nbsp;</div>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
