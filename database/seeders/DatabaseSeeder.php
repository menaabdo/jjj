<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
      //$bd=rand(1262055681,1262055681);
     DB::table('users')->insert([
        'name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'birthd'=> date("Y-m-d ", mt_rand(1, time())),
        'admin'=>(bool) mt_rand(0, 1),
        'password' => Hash::make('password'),
    ]);
        // \App\Models\User::factory(10)->create();
    }
}
