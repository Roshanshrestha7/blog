<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'Roshan Shrestha',
            'email' => 'roshan.stha5298@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
