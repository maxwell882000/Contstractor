<?php

namespace App\TraitDirectory;

trait ToUpper
{
    function toUpper($key_word)
    {
        $seperate = explode("_", $key_word);
        $new_key = "";
        foreach ($seperate as $item) {
            if ($seperate[0] == $item) {
                $new_key = $new_key . $item;
                continue;
            }
            $item[0] = strtoupper($item[0]);
            $new_key = $new_key . $item;
        }
        return $new_key;
    }

}
