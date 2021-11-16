<?php
namespace trophy\forms;

use std, gui, framework, trophy;

use trophy\control\UXAccountChoice;
use trophy\dto\AccountDTO;


use kosogroup\minecraft\launcher\core\TrophyLauncher;


class TestForm extends AbstractForm
{
    function __construct()
    {
        parent::__construct();
        
        $accountChoice = new UXAccountChoice("select account");
        
        $accountChoice->addAccount(new AccountDTO());
        $accountChoice->addAccount(new AccountDTO());
        $accountChoice->addAccount(new AccountDTO());
        $accountChoice->addAccount(new AccountDTO());
        
                
        $this->add($accountChoice);
        
        $inview = new UXInstallationsView();
        $inview->addInstallation("");
        $inview->addInstallation("");
        $inview->addInstallation("");
        
        $this->add($inview);
    
    
        $launchOptions = array(
        'url' => array (
            'meta' =>       'https://launchermeta.mojang.com',
            'resource' =>   'https://resources.download.minecraft.net'
        ),
        //'javaPath' => 'javaw',
        'launcherPath' =>   './minecraft',
        'version' => array(
            //'jsonDownload' => false,
            'number' =>     '1.16.5',
            'type' =>       'release'
        ),
        'auth' => array(
            'username' =>   'meatsuko',
            'uuid' =>       'meatsuko',
            'token' =>      'shalala',
            'type' =>       'trophy',
        ),
        //'detached' => false,
        'memory' => array(
            'min' =>        '8G',
            'max' =>        '32G'
        )
    );
    
    (new TrophyLauncher())->launch($launchOptions);
        
        
        

        
        
        

        
        
    }
}