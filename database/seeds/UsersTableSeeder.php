<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::create([
            'name' => 'Roshan Shrestha',
            'email' => 'roshan.stha5298@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatar/first.png',
            'about' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aperiam autem consequatur consequuntur distinctio doloremque, enim, fugiat, incidunt laborum molestias nemo nisi officia quasi quidem quos ratione repudiandae voluptatem.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
        ]);
    }
}
