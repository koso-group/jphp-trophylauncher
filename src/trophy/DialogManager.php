<?php
namespace trophy;

use std, gui, framework;

class DialogManager
{
    public static $DIALOG_L0 = NULL;
    public static $DIALOG_L1 = NULL;


    public static function DeployL0(UXFragmentPane $fragmentPane)
    {
        static::$DIALOG_L0 = $fragmentPane;
        static::$DIALOG_L0->managed = false;
        static::$DIALOG_L0->visible = false;
    }
    public static function DeployL1(UXFragmentPane $fragmentPane)
    {
        static::$DIALOG_L1 = $fragmentPane;
        static::$DIALOG_L1->managed = false;
        static::$DIALOG_L1->visible = false;
    }

    public static function ShowL0(UXForm $dialog)
    {
        static::$DIALOG_L0->applyFragment($dialog);
        static::$DIALOG_L0->managed = true;
        static::$DIALOG_L0->visible = true;
    }
    public static function ShowL1(UXForm $dialog)
    {
        static::$DIALOG_L1->applyFragment($dialog);
        static::$DIALOG_L1->managed = true;
        static::$DIALOG_L1->visible = true;
    }



}



