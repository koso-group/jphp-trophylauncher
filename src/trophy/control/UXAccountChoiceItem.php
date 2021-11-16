<?php
namespace trophy\control;

use std, gui, framework, trophy;

use trophy\dto\AccountDTO;


class UXAccountChoiceItem extends UXMenuItem
{
    private $_accountDTO;
    function __construct(AccountDTO $account)
    {
        parent::__construct($account->playerName);

        $this->_accountDTO = $account;



    }

    public function getAccountDTO()
    {
        return $this->_accountDTO;
    }


}