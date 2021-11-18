<?php
namespace trophy\dto;

use std, gui, framework, trophy;


class AccountDTO
{
    public $username;
    public $uuid;
    public $accessToken = 'empty';
    public $type = 'local'; //trophy

    public $trophyUsername = null;
    public $trophyAccessToken = null;

    public function accountUpdate()
    {
        if($this->type != "trophy") return $this;
        
        $link = "https://auth.minetrophy.ru/session/minecraft/authToken/" . $this->trophyUsername . "/" . $this->trophyAccessToken;
        $account = json_decode(file_get_contents($link), true);
        var_dump($link);

        $this->fromArray($account);

        return $this;
    }


    public function __toString()
    {
        if($this->type == "trophy") $username = "MT // " . $this->username;

        $username = $this->username;

        return $username;
    }

    public function toArray()
    {
        return json_decode(json_encode($this));
    }


    public static function DeployDefault()
    {
        $account = new AccountDTO();
        $account->username     = "Player" . rand(1000, 9999);
        $account->uuid         = "default";
        return $account;
    }

    public static function ResolveAll()
    {
        return [static::DeployDefault(), static::DeployDefault(),static::DeployDefault(),static::DeployDefault(),static::DeployDefault()];
    }
}