<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '111222333445',
            'nama' => 'admin',
            'email' => 'admin@admim.com',
            'telp' => '0896543454322',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'confirm_password' => 'admin123'

        ]);
    }
}
