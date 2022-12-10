<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'黒田秀明','email'=>'kurodah@gmail.com','password'=>bcrypt('s8061710')],
            ['name'=>'山田太郎','email'=>'yamada@test.com','password'=>bcrypt('s8061710')],
            ['name'=>'桜花子','email'=>'sakura@test.com','password'=>bcrypt('s8061710')],
            ['name'=>'高橋ゆきお','email'=>'yakaha@test.com','password'=>bcrypt('s8061710')]
           ]);   //
    }
}
