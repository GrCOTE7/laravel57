<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
 public function run()
 {
  User::create([
   'name'              => 'Admin',
   'email'             => 'durand@chezlui.fr',
   'role'              => 'admin',
   'password'          => bcrypt('123123'),
   'email_verified_at' => Carbon::now(),
  ]);
  User::create([
   'name'              => 'User',
   'email'             => 'dupont@chezlui.fr',
   'password'          => bcrypt('123123'),
   'email_verified_at' => Carbon::now(),
  ]);
  User::create([
   'name'              => 'User2',
   'email'             => 'martin@chezlui.fr',
   'password'          => bcrypt('123123'),
   'email_verified_at' => Carbon::now(),
  ]);
 }
}
