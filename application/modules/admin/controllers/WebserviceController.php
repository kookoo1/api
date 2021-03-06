<?php

class Admin_WebserviceController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    }

    public function clientAction()
    {
        $client = new Zend_Soap_Client('http://192.168.33.95/admin/webservice/server?wsdl');
        $client->setSoapVersion(SOAP_1_1); // nromaal is het 1.2 , voor zend 1.2
        $client->addProducts('titel45','omschrijving78',15);
    }

    public function serverAction()
    {
        // uitschakelen layout en de view niet renderen
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        // create a wsdl based on the Application_Model_Producten

        $wsdl = $this->_getParam('wsdl');
        if (isset($wsdl)) {

            $server = new Zend_Soap_AutoDiscover(); // maakt hiermee een perfecte soap wsdl omgeving
            $server->setClass('Admin_Model_Producten');
            $server->handle();
        } else {
            $server = new Zend_Soap_Server('http://192.168.33.95/admin/webservice/server?wsdl');
            $server->setClass('Admin_Model_Producten');
            $server->setObject(new Admin_Model_Producten());
            $server->handle();
        }
    }


}





