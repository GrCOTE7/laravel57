<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

 public function run()
 {
  User::create([
   'name'              => 'Durand',
   'email'             => 'grcote7@gmail.com',
   'role'              => 'admin',
   'password'          => bcrypt('123123'),
   'settings'          => '{"pagination": 8, "adult": true}',
   'email_verified_at' => Carbon::now(),
  ]);

  User::create([
   'name'              => 'Dupont',
   'email'             => 'dupont@chezlui.fr',
   'password'          => bcrypt('123123'),
   'settings'          => '{"pagination": 8, "adult": true}',
   'email_verified_at' => Carbon::now(),
  ]);

  User::create([
   'name'              => 'Martin',
   'email'             => 'martin@chezlui.fr',
   'password'          => bcrypt('123123'),
   'settings'          => '{"pagination": 8, "adult": true}',
   'email_verified_at' => Carbon::now(),
  ]);
 }
}
