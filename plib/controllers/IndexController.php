<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->view->pageTitle = 'Product Information';
        $this->view->osInfo = (new Modules_ProductInfo_Product())->getInfo();

    }

    public function jsonAction()
    {
        $this->_helper->json((new Modules_ProductInfo_Product())->getInfo());
    }
}
