<?php
namespace trophy\forms;

use std, gui, framework, trophy;


class LauncherForm extends AbstractForm
{
    public $accountChoice;
    public function __construct()
    {
        parent::__construct();

        $this->accountChoice = new UXAccountChoice(Lang::T("account-choice"));
        $this->accountChoiceContainer->add($this->accountChoice);

        $this->accountChoice->clearAccounts();
        foreach(AccountDTO::ResolveAll() as $account)
        {
            $this->accountChoice->addAccount($account);
        }
    }
}