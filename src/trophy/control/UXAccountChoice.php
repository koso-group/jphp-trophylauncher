<?php
namespace trophy\control;

use std, gui, framework, trophy;


use trophy\dto\AccountDTO;


class UXAccountChoice extends UXMenuButton
{
    private $_itemAccountManager;

    private $_placeholder;
    function __construct($palceholder)
    {
        parent::__construct();
        $this->_placeholder = $palceholder;

        $this->text = $this->_placeholder;


        $this->_itemAccountManager = new UXMenuItem("Account Manager");
        $this->_itemAccountManager->graphic = new UXImageView(IconFactory::ResolveIcon("sett"));

        $this->_itemAccountManager->on('action', function () {});

        $this->clearAccounts();
    }

    public function clearAccounts()
    {
        $this->text = $this->_placeholder;
        $this->items->clear();
        $this->items->add(UXMenuItem::createSeparator());
        

        

        $this->items->add($this->_itemAccountManager);
        $this->items->add(new UXMenuItem("Logout"));

    }






    public function addAccount(AccountDTO $account)
    {
       $item = new UXAccountChoiceItem($account);
       $item->on('action', function () use ($item) { $this->__choiceAction($item); });
       $this->items->insert(0, $item);
    }

    public $selectedItem = null;

    private function __choiceAction(UXAccountChoiceItem $accountItem)
    {
        $this->text         = $accountItem->text;
        $this->graphic      = $accountItem->graphic;

        $this->selectedItem = $accountItem;
    }

    public function getSelectedAccount() : AccountDTO
    {
        return $this->selectedItem->getAccountDTO();
    }

    public function setSelectedAccount(AccountDTO $account)
    {
        $this->__choiceAction(new UXAccountChoiceItem($account));
    }
}