<?php

namespace App\Http\Controllers\Admin\Home;


use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Http\RequestCustom;
use App\Models\Common\Buttons;
use App\Models\Home\InfoSectionDescriptionModel;
use App\Models\Home\InfoSectionModel;


class WelcomeHomeController extends ControllerExtendedListInputWithTitle
{
    private const PATH = "admin_panel.pages.home.welcome_home.";
    public $model = InfoSectionDescriptionModel::class;
    public $nameInBlade = "object";
    public $pathToBlade = self::PATH . "welcome_home_input";
    public $nameInBladeList = "object_list";
    public $pathStoreImages = "images_store/welcome";
    public $pathToBladeInList = self::PATH . "welcome_home_show";
    public $modelParent = InfoSectionModel::class;




    public function modelShowExisting(RequestCustom $requestCustom, int $id)
    {

        $desc_model = InfoSectionModel::all()->first();
        if ($desc_model->count() < 2 && $id == 0 && !($requestCustom->new_added)) {
            $new_model = InfoSectionDescriptionModel::create();
            $new_model->info()->associate($desc_model);
            $new_model->save();
            Buttons::create(
                [
                    "button_type" => $this->model,
                    "button_id" => $new_model->id
                ]
            );
            $id = $new_model->id;
        } else if ($desc_model->count() == 2 && $id == 0 && !($requestCustom->new_added)) {
            return back();
        }
        if ($requestCustom->new_added) {
            $id = $requestCustom->new_added;
        }
        return parent::modelShowExisting($requestCustom, $id);
    }
}
