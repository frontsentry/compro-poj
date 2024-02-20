<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailReceiverSeeder extends Seeder
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
                'key' => 'email_receiver_vacancy',
                'value' => 'sdm@optimajasa.co.id',
            ],
            [
                'key' => 'email_receiver_wbs',
                'value' => 'wbs@optimajasa.co.id',
            ]
        ];

        foreach ($webSettings as $webSetting) {
            \App\Models\WebSetting::create($webSetting);
        }
    }
}
