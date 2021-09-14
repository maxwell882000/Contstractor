<?php

namespace Database\Seeders;

use App\Models\Common\Languages;
use Illuminate\Database\Seeder;

class LanguageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Languages::create([
           "name"=>"ru",
            "is_selected" =>1
        ]);
        Languages::create([
            "name"=>"en",
            "is_selected" =>0
        ]);
        Languages::create([
            "name"=>"uz",
            "is_selected" =>0
        ]);
    }
}
