<?php
namespace trophy\forms;

use std, gui, framework, trophy;


class Dialog_AccountManager extends AbstractForm
{
    public function __construct()
    {
        parent::__construct();

        foreach(AccountDTO::ResolveAll() as $account)
        {
            //$this->account->addAccount($account);
        }
    }
}