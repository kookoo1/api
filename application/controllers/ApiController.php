<?php

class ApiController extends Zend_Controller_Action {

    public function init() {
        // geen designcode ==> hiermee wordt de view uitgeschakeld
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout()->disableLayout();
    }
    
    
    //

    public function indexAction() {
        $this->getResponse()->appendBody('indexAction() return');
    }

    
    // vaste 4 mogelijke action die mogelijk zijn
    public function getAction() {
        $this->getResponse()->appendBody('getAction() return');
        // action body
    }

    public function postAction() {
        $this->getResponse()->appendBody('postAction() return');
    }

    public function putAction() {
        $this->getResponse()->appendBody('putAction() return');
    }

    public function deleteAction() {
        $this->getResponse()->appendBody('deleteAction() return');
    }

}

