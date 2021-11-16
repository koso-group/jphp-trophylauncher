<?php
namespace trophy\control;

use std, gui, framework, trophy;


use trophy\dto\AccountDTO;


class UXInstallationsViewItem extends UXVBox
{
    function __construct()
    {
        parent::__construct();

        

        $this->classes->add("content-pane");
        $this->padding = 10;



        $labelProfileName = new UXLabel("PROFILE NAME");
        $labelProfileName->style = "";
        $labelProfileName->font->bold = true;
        $labelProfileName->font->size = 16;
        //$labelProfileName->font->family = "Candara";

        $labelVersionName = new UXLabel("VERSION");
        $labelVersionName->style = "";
        $labelVersionName->font->family = "Candara";

        $linkVersionJSON = new UXHyperLink("Скачать Client JSON");

        $hBoxVersion = new UXHBox([$labelVersionName, $linkVersionJSON]);
        UXVBox::setVgrow($hBoxVersion, 'ALWAYS');
        $hBoxVersion->spacing = 4;
        $hBoxVersion->alignment = 'CENTER_LEFT';

        $labelReleaseDate = new UXLabel("Release Date");
        $labelReleaseDate->style = "";
        $labelReleaseDate->font->family = "Candara";

        $labelReleaseType = new UXLabel("Release Date");
        $labelReleaseType->style = "";
        $labelReleaseType->font->family = "Candara";

        $vBoxInfo = new UXVBox([$labelProfileName, $hBoxVersion, $labelReleaseType, $labelReleaseDate]);
        UXHBox::setHgrow($vBoxInfo, 'ALWAYS');

        $buttonDownload = new UXButton("СКАЧАТЬ СЕРВЕР");
        UXVBox::setVgrow($buttonDownload, 'ALWAYS');
        $buttonDownload->maxWidth = 999;

        $buttonPlay = new UXSplitMenuButton("ЗАПУСТИТЬ");
        UXVBox::setVgrow($buttonPlay, 'ALWAYS');
        $buttonPlay->maxWidth = 999;

        $vBoxButtons = new UXVBox([$buttonDownload, $buttonPlay]);
        $vBoxButtons->spacing = 4;


        $hBoxRoot = new UXHBox([$vBoxInfo, $vBoxButtons]);
        $hBoxRoot->spacing = 10;
        UXVBox::setVgrow($hBoxRoot, 'ALWAYS');

        
        $this->add($hBoxRoot);
    }
}