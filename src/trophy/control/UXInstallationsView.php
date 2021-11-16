<?php
namespace trophy\control;

use std, gui, framework, trophy;


use trophy\dto\AccountDTO;


class UXInstallationsView extends UXScrollPane
{
    private $_vBoxContent;
    public function __construct()
    {
        parent::__construct();

        $this->classes->add("root-pane");
        $this->spacing = 2;

        $this->width = 800;
        $this->height = 460;

        $this->fitToHeight = true;
        $this->fitToWidth = true;
        $this->vbarPolicy = "ALWAYS";

        $this->_vBoxContent = new UXVBox();
        //$this->_vBoxContent->spacing
        
        $this->content = $this->_vBoxContent;
    }

    public function addInstallation($installation)
    {
        $item = new UXInstallationsViewItem();
        //UXVBox::setVgrow($item, 'ALWAYS');
        $this->_vBoxContent->add($item);
    }


}