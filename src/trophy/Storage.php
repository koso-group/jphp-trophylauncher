<?php
namespace trophy;

use std, gui, framework;

class Storage
{
    public static $STORAGE = NULL;

    public static function Install()
    {
        static::$STORAGE = json_decode(file_get_contents("storage.json"), true);
    }
    public static function Commit()
    {
       
        file_put_contents("storage.json", json_encode(static::$STORAGE, JSON_PRETTY_PRINT));
    }



    public static function Push($var, $value)
    {
        static::$STORAGE[$var] = $value;
    }
    public static function Resolve($var, $default)
    {
        $value = static::$STORAGE[$var];
        return isset($value) ? $value : $default;
    }

    public static function PushCheckBox($checkBox)
    {
        static::Push($checkBox->id, $checkBox->selected);
    }
    public static function ResolveCheckBox($checkBox, $default)
    {
        $checkBox->indeterminate = false;
        $checkBox->selected = static::Resolve($checkBox->id, $default);
    }





}



