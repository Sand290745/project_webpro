<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=>'Pare',
        'email'=>'Pare@admin.com',
        'password'=>bcrypt('1234'),
        ]);

        User::create([
            'name'=>'Poppy',
            'email'=>'Poppy@admin.com',
            'password'=>bcrypt('1234'),
            ]);

            User::create([
                'name'=>'Sand',
                'email'=>'Sand@admin.com',
                'password'=>bcrypt('1234'),
                ]);
    }
}
