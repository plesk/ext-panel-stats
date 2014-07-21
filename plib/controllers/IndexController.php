<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        // TODO: allow access for admin only

        $this->view->pageTitle = $this->lmsg('settingsPageTitle');

        $form = new Modules_PanelStats_Form_Settings();

        if ($this->getRequest()->isPost() && $form->isValid($this->getRequest()->getPost())) {
            $form->process();
            $this->_status->addMessage('info', $this->lmsg('settingsSaved'));
            $this->_helper->json(array('redirect' => pm_Context::getModulesListUrl()));
        }

        $this->view->form = $form;
    }
}
