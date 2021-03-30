<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new User (
          [

                'name' => 'Admin SilentMoon',
                'email' => 'admin@silentmoon.com',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]

        );
        $admin->save();
    }
}
