<?php

class Modules_PanelStats_Application extends pm_Application
{
    public function run()
    {
        self::init();

        Zend_Controller_Front::getInstance()->setControllerDirectory(pm_Context::getPlibDir() . '/controllers');
        Zend_Layout::startMvc(array('layoutPath' => pm_Context::getPlibDir() . '/layouts'));

        Zend_Controller_Front::getInstance()->dispatch();
    }
}

