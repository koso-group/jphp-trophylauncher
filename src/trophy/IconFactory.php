<?php
namespace trophy;

use std, gui, framework;

class IconFactory
{
    public static $ICONS = NULL;

    public static function ResolveIcon($iconName)
    {
        if(!isset(static::$ICONS[$iconName])) 
            static::$ICONS[$iconName] = new UXImage("res://.data/icons/{$iconName}.png");

        return static::$ICONS[$iconName];
    }
}