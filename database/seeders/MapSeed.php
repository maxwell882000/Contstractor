<?php

namespace Database\Seeders;

use App\Models\Common\GoogleMapConf;
use Illuminate\Database\Seeder;

class MapSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoogleMapConf::create();
    }
}
