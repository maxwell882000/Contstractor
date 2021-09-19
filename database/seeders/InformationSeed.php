<?php

namespace Database\Seeders;

use App\Models\Common\Information;
use Illuminate\Database\Seeder;

class InformationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // types :
// address - 0
// email   - 1
// phone number - 2
    public function run()
    {
        $address = new Information();
        $address->type = 0;
        $address->icon_data = "flaticon-placeholder";
        $address->save();
        $email = new Information();
        $email->icon_data = "flaticon-envelope";
        $email->type = 1;
        $email->save();
        $phone_number = new Information();
        $phone_number->icon_data = "flaticon-technology-4";
        $phone_number->type = 2;
        $phone_number->save();
    }
}
