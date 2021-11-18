<?php
namespace trophy\forms;

use std, gui, framework, trophy;


class Dialog_InstallationManger extends AbstractForm
{
    private $installationsView;
    public function __construct()
    {
        parent::__construct();

        $this->installationsView = new UXInstallationsView();
        $this->installationsViewContainer->add($this->installationsView);

        $this->installationsView->addInstallation(new MinecraftInstallationDTO);
    }
}