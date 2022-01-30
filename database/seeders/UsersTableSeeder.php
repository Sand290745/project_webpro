<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pare',
                'email' => 'Pare@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jyvXrnwGoEbrTd7hYawRWuocXvtVC8Oiy/Rd1OmrsFltpQQ/rrSYe',
                'photo' => 'https://scontent.fbkk8-4.fna.fbcdn.net/v/t1.6435-9/120846427_2668201266735874_4121914259103631597_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeEccQs7G7rWvZxUlNzwPh5oE4OF37OwGuwTg4Xfs7Aa7FTFudVn1aX0Uh5IURzn77oY6aQwCHSp4VP7yiOLdz-u&_nc_ohc=8fiGNnpTyPEAX-Ft8MG&tn=LCRKh6uTt3lscZID&_nc_ht=scontent.fbkk8-4.fna&oh=0c43602d8324b32585249f154077178e&oe=6192B251',
                'remember_token' => NULL,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Poppy',
                'email' => 'Poppy@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kW3NxcX83Y/Iq5vO31KOFuR0Atb6SaVn7.cJ6NoAgSyB./ABN160W',
                'photo' => 'https://scontent.fbkk12-2.fna.fbcdn.net/v/t1.15752-9/246180943_557998091944618_1297571182715544261_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeFOJHX0FEN4TMp1Ypi4_uGOKzWoEIzcITUrNagQjNwhNeZDYETPCwgJ7lu1IsGbglWtoRDSLnCPrdU_KvG1nF2T&_nc_ohc=HtkmCkehL9sAX_V_4Xl&_nc_ht=scontent.fbkk12-2.fna&oh=2763678d0ffa01aaf0bb4e13808dfb49&oe=61962663',
                'remember_token' => NULL,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sand',
                'email' => 'Sand@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JMOLI3WV6w3B9aHJwgSnWeaA2EX15bGJoG1JA5zb6iM2laA9gumMa',
                'photo' => 'https://scontent.fbkk13-1.fna.fbcdn.net/v/t1.15752-9/246440357_210698507713366_4264230806393697723_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeH53ssuGvFQUjna_vxVkAHo9b9d-jTf7Tz1v136NN_tPKDvQIYC0YAGMQYhIWR5QhOeHVAvJU_qdeoqRI57EZe_&_nc_ohc=udFMaHGAeAQAX9q2wfT&_nc_ht=scontent.fbkk13-1.fna&oh=cd848a1d868385c74f708f0c7d4685ce&oe=6192C086',
                'remember_token' => NULL,
                'created_at' => '2021-10-23 13:59:26',
                'updated_at' => '2021-10-23 13:59:26',
            ),
        ));
        
        
    }
}