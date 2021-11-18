<?php
namespace trophy\dto;

use std, gui, framework, trophy;

use trophy\BaseModel;

class MinecraftInstallationDTO extends BaseModel
{
    public $name = "defaul";
    public $icon = "trophy";
    public $description = "trophy";

    public $minecraftVersion = array();
    public $minecraftPath = false;

    public $screenResolution = false;
    public $screenFull = false;

    public $javaPath = false;
    public $javaUserArguments = false;

    public static function DeployDefault()
    {
        $class = new self;

        $class->name = "empty";

        return $class;
        
    }

    public function __serialize()
    {
        return json_decode(json_encode($this), true);
    }

    public function fromArray($array)
    {
        $class = parent::fromArray($array);

        $class->minecraftVersion = (new MinecraftVersionDTO)->fromArray($array['minecraftVersion']);

        return $class;
    }






}