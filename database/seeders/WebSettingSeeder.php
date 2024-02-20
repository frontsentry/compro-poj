<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $webSettings = [
            [
                'key' => 'total_outsourcing',
                'value' => '0',
            ],
            [
                'key' => 'total_transport_fleet',
                'value' => '0',
            ],
            [
                'key' => 'total_telecentre',
                'value' => '0',
            ],
        ];

        foreach ($webSettings as $webSetting) {
            \App\Models\WebSetting::create($webSetting);
        }
    }
}
