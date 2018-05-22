<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \App\Setting::create([
            'site_name' => "Tharindu's Blog",
            'site_description' => 'tharinduonline has 4 repositories available. Follow their code on GitHub',
            'address' => 'Badulla Sri lanka',
            'contact_number' => '077 96 17 143',
            'contact_email' => 'tharindu@sriwebs.com'
        ]);
    }
}
