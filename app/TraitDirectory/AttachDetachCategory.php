<?php

namespace App\TraitDirectory;

trait AttachDetachCategory
{
    public $attach_attribute;

    public function attachDetach($request, $object)
    {
        if ($request->has("id_category")) {
            $object->category()->sync($request->id_category);
        }
    }

}
