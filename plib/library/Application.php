<?php

class Modules_PanelStats_Application extends pm_Application
{
    public function run()
    {
        self::init();

        Zend_Controller_Front::getInstance()->setControllerDirectory(MODULE_PLIB_DIR . '/controllers');
        Zend_Layout::startMvc(array('layoutPath' => MODULE_PLIB_DIR . '/layouts'));

        Zend_Controller_Front::getInstance()->dispatch();
    }
}
