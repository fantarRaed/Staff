<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Mr',
             'firstname' => 'admin'
         ]);
    }
    public function setPasswordAttribute($password){
       $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;

    }
  
}
