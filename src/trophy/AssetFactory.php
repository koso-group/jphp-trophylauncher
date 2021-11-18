<?php
namespace trophy;

use std, gui, framework;

class AssetFactory
{
    public static $ICONS = NULL;
    public static $IMAGES = NULL;

    public static function ResolveIcon($iconName)
    {
        if(!isset(static::$ICONS[$iconName])) 
            static::$ICONS[$iconName] = new UXImage("res://.data/icons/{$iconName}.png");

        return static::$ICONS[$iconName];
    }

    public static function ResolveImage($imageName)
    {
        if(!isset(static::$IMAGES[$imageName])) 
            static::$IMAGES[$imageName] = new UXImage("res://.data/img/{$imageName}.png");

        return static::$IMAGES[$imageName];
    }
}