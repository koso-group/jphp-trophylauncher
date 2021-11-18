<?php
namespace trophy\dto;

use std, gui, framework, trophy;

use trophy\BaseModel;

class MinecraftVersionDTO extends BaseModel
{
    public $id = "";
    public $type = "";
    public $url = "";
    public $releaseTime = "";

    public function __toString()
    {
        return "Minecraft " . $this->id . " // " . $this->type;
    }

    
}