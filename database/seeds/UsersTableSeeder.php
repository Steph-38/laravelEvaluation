<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.fr',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'ned',
                'email' => 'ned@ned.fr',
                'password' => bcrypt('ned'),
            ],
            [
                'name' => 'moe',
                'email' => 'moe@moe.fr',
                'password' => bcrypt('moe'),
            ],
            [
                'name' => 'lili',
                'email' => 'lili@lili.fr',
                'password' => bcrypt('lili'),
            ],
        ]);
    }
}
