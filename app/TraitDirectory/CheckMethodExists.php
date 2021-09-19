<?php

namespace App\TraitDirectory;

trait CheckMethodExists
{
    public function methodExists($class_name, $key){
       foreach (get_class_methods($class_name) as $name){
            if($name == $key){
                return true;
            }
        }
       return  false;
    }
}
