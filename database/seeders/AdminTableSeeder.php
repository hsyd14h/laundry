<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           [
              'name'              => 'Admin',
              'image'             => null,
              'email'             => 'superadmin_01@gmail.com',
              'email_verified_at' => now(),
              'password'          => Hash::make('password'),
              'remember_token'    => Str::random(10),
              'created_at'        => date("Y-m-d H:i:s"),
              'updated_at'        => date("Y-m-d H:i:s"),
           ] 
        ]);
    }
}
