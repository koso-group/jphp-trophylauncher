<?php
namespace trophy\control;

use std, gui, framework, trophy;

use trophy\dto\MinecraftInstallationDTO;
use trophy\dto\MinecraftVersionDTO;


class UXInstallationsViewItem extends UXVBox
{
    function __construct(MinecraftInstallationDTO $minecraftInstallation)
    {
        parent::__construct();

        

        $this->classes->add("content-pane");
        $this->padding = 10;



        $labelProfileName = new UXLabel($minecraftInstallation->name);
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



        $buttonDownload->on('click', function(){});
        $buttonPlay->on('click', function(){});

        $playItemFilesOpen = new UXMenuItem(Lang::T("b-paly-item-files-open"));
        $playItemFilesOpen->graphic = new UXImageView(AssetFactory::ResolveIcon("folder"));
        $buttonPlay->items->add($playItemFilesOpen);

        $playItemFilesCheck = new UXMenuItem(Lang::T("b-paly-item-files-check"));
        $playItemFilesCheck->graphic = new UXImageView(AssetFactory::ResolveIcon("refresh"));
        $buttonPlay->items->add($playItemFilesCheck);

        $buttonPlay->items->add(UXMenuItem::createSeparator());

        $playItemInstallEdit = new UXMenuItem(Lang::T("b-paly-item-install-edit"));
        $playItemInstallEdit->graphic = new UXImageView(AssetFactory::ResolveIcon("sett"));
        $buttonPlay->items->add($playItemInstallEdit);

        $playItemInstallDuplicate = new UXMenuItem(Lang::T("b-paly-item-install-duplicate"));
        $playItemInstallDuplicate->graphic = new UXImageView(AssetFactory::ResolveIcon("duplicate"));
        $buttonPlay->items->add($playItemInstallDuplicate);

        $buttonPlay->items->add(UXMenuItem::createSeparator());

        $playItemInstallRemove = new UXMenuItem(Lang::T("b-paly-item-install-remove"));
        $playItemInstallRemove->graphic = new UXImageView(AssetFactory::ResolveIcon("remove"));
        $buttonPlay->items->add($playItemInstallRemove);



        $buttonPlay->items->add(UXMenuItem::createSeparator());

        $playItemFilesRemove = new UXMenuItem(Lang::T("b-paly-item-files-remove"));
        $playItemFilesRemove->graphic = new UXImageView(AssetFactory::ResolveIcon("remove"));
        $playItemFilesRemove->enabled = $minecraftInstallation->minecraftPath;
        $buttonPlay->items->add($playItemFilesRemove);


    }
}