<?php

namespace Database\Seeders;

use App\Models\Common\Buttons;
use App\Models\Common\Icon;
use App\Models\Common\Images;
use App\Models\Home\InfoSectionDescriptionModel;
use App\Models\Home\InfoSectionModel;
use Illuminate\Database\Seeder;

class WelcomeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = InfoSectionModel::create();

        Images::create(
            [
                "image_type"=>InfoSectionModel::class,
                "image_id"=>$info->id,
                "image"=> "../images/background/bottom-circular.png"
            ]
        );

        $this->create($info);
        $this->create($info);
    }
    public function create($info){
        $desc = InfoSectionDescriptionModel::create();
        $desc->info()->associate($info);
        $desc->save();
        Buttons::create([
            "button_type" => InfoSectionDescriptionModel::class,
            "button_id" => $desc->id
        ]);
        Images::create(
            [
                "image_type"=>InfoSectionDescriptionModel::class,
                "image_id"=> $desc->id
            ]
        );
    }

}
