<?php
namespace trophy;

use bundle\sql\SqliteClient;
use bundle\sql\SqliteStorage;
use trophy;
use std, gui, framework;

class StorageDB
{
    private static $STORAGE = null;
    public static function Install()
    {
    

        
    }

    public static function ResolveAll($table, $default)
    {
        $result = static::$STORAGE->query("SELECT * FROM {$table} LIMIT 100");

        var_dump($result->fetchAll());
    }
}



