<?php

namespace App\TraitDirectory;

use App\Models\Shop\ItemShop;

trait CreateAndUpdateItemShop
{

    function createItemShop($request, $id)
    {
        if ($request->has("item_product")) {
            $new = $request->all();
            $new["image_to_category_id"] = $id;
            return ItemShop::create($new);
        }

    }

    function updateItemShow($request, $model)
    {
        if ($model && $request->has("item_product")) {
            $model->update($request->all());
        }
    }


}
