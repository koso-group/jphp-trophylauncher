<?php
namespace trophy;

use std, gui, framework;

class StorageDB extends Storage
{
    


    public function Install()
    {
        static::$STORAGE = SqlDriverManager::getConnection('sqlite:storage.db');

        $us = $conn->query('SELECT * FROM user where id = 1')->fetch();
        $user = $us->toArray();
        $conn->close();
        $this->toast('Персонаж не найден!',5000);

        $query = $this->database->query("SELECT * FROM `user` WHERE `name`='".$name."'");
        $info = $query->fetch();
    }

    public static function Push() {}
}



