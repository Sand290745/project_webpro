<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrixAttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trix_attachments')->delete();
        
        \DB::table('trix_attachments')->insert(array (
            0 => 
            array (
                'id' => 5,
                'field' => 'content',
                'attachable_id' => NULL,
                'attachable_type' => 'App\\Blog',
                'attachment' => '2hzehGO4fAiYMI2G2HBW2NSZ1rKn3R0LpQLPOczC.jpg',
                'disk' => 'public',
                'is_pending' => 1,
                'created_at' => '2021-10-24 11:41:44',
                'updated_at' => '2021-10-24 11:41:44',
            ),
        ));
        
        
    }
}