<?php
namespace trophy\control;

use std, gui, framework, trophy;

use trophy\dto\AccountDTO;


class UXAccountChoiceItem extends UXMenuItem
{
    private $_accountDTO;
    function __construct(AccountDTO $account)
    {
        parent::__construct($account->username);

        $this->_accountDTO = $account;

        $avatarImage = AssetFactory::ResolveImage("avatardeff");
        //to-do: check online-account ? place avatar...
        
        $imageview = new UXImageView($avatarImage);
        $imageview->width = 16;
        $imageview->height = 16;
        $this->graphic = $imageview;



    }

    public function getAccountDTO()
    {
        return $this->_accountDTO;
    }


}