<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'first_name' => 'Super Admin',
            'last_name' => 'Super admin',
            'email' => 'super_admin@gmail.com',
            'email_verified_at' => date("Y-m-d h:i:s"),
            'password' => Hash::make('11111111'),
            'is_admin' => 1
        ]);
    }
}
