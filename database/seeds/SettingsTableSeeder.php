<?php

use Illuminate\Database\Seeder;


class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\settings::create([
            'Site_name' => "roshan's blogs",
            'address' => 'Sudal,Bkt',
            'contact_number' => '987 456 321',
            'contact_email' => 'roshan.stha5298@gmail.com'
        ]);
    }
}
