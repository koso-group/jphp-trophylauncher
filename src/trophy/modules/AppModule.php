<?php
namespace trophy\modules;

use bundle\sql\SqlStorage;
use std, gui, framework, trophy;


class AppModule extends AbstractModule
{
    public function __construct()
    {
        parent::__construct();

        //connection-resolve
        //updater
        //Squirel::Deploy();

        //configuration-deploy
        //Storage::Install();
        //StorageDB::Install();
        Lang::Install();


       
    }
}
