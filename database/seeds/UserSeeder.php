<?php

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
            'name' => 'Meenum Indonesia',
            'email' => 'meenum@email.com',
            'password' => Hash::make('admin1234')
        ]);
    }
}
