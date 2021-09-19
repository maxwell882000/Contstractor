<?php

namespace App\TraitDirectory;

use App\Models\Common\Buttons;

/// check is it work properly
trait CreateAndUpdateButton
{
    private function getPrimaryData($request, $index)
    {
        return [
            "name^uz" => $request->get("name^uz_" . $index) ?? "",
            "name^en" => $request->get("name^en_" . $index) ?? "",
            "name^ru" => $request->get("name^ru_" . $index) ?? "",
            "link" => $request->get("link_" . $index) ?? "",
        ];
    }

    public function createButton($request, $type, $id)
    {
        if ($request->has("button")) {
            for ($i = 1; $i <= $request->get("button"); $i++) {
                $button = $this->getPrimaryData($request, $i);
                $button["button_type"] = $type;
                $button["button_id"] = $id;
                Buttons::create($button);
            }
        }

    }

    public function updateButton($request)
    {

        if ($request->has("button")) {
            for ($i = 1; $i <= $request->get("button"); $i++) {
                $model = Buttons::find($request->get("id_button_" . $i));
                $button = $this->getPrimaryData($request, $i);
                $model->update($button);
            }
        }
    }
}
