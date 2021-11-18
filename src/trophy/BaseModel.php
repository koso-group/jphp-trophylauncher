<?php
namespace trophy;

use std, gui, framework, trophy;

class BaseModel
{


    public function fromArray($array)
    {
        $object = $this;
        foreach ($array as $key => $value)
        {
            $object->$key = $value;
        }

        return $object;
    }

    public function __get($a)
    {
        var_dump($a);
    }
    
}