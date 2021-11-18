<?php
namespace trophy;

use std, gui, framework, trophy;

class Lang
{
    private static $wordStack;

    public static function T($word)
    {
        if(isset(static::$wordStack[$word]))
        {
            $word = static::$wordStack[$word];
            
        }
        else
        {
            static::$wordStack[$word] = $word;
            static::Commit();
        }

        return $word;
    }

    public static function Install()
    {
        static::$wordStack = json_decode(file_get_contents("lang-temp.json"), true);
    }
    public static function Commit()
    {
       
        file_put_contents("lang-temp.json", json_encode(static::$wordStack, JSON_PRETTY_PRINT));
    }

    
}