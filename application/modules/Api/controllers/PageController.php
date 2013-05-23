<?php

//class Api_PageController extends Zend_Controller_Action {
class Api_PageController extends Zend_Rest_Controller { // deze is de juiste manier

    public function headAction() {
        
    }

    public function init() {
        /* Initialize action controller here */
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();
    }

    public function indexAction() {
        $this->getResponse()->appendBody('indexAction() return');
    }

    // vaste 4 mogelijke action die mogelijk zijn
    public function getAction() {
        $this->getResponse()->appendBody('getAction() return');
        // action body
    }

    public function postAction() {
        var_dump($this->_getParam('field'));
        //$this->getResponse()->appendBody('postAction() return');
    }

    public function putAction() {
        $this->getResponse()->appendBody('putAction() return');
    }

    public function deleteAction() {
        $this->getResponse()->appendBody('deleteAction() return');
    }

}

