<?php

class ApiController extends Zend_Controller_Action {

    public function init() {
        // geen designcode ==> hiermee wordt de view uitgeschakeld
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout()->disableLayout();
    }
    
    
    //

    public function clientAction(){
        $client = new Zend_Http_Client();
        
//        $client->setUri('http://localhost:8010/Api/Page');
//        
//        $client->setEncType(Zend_Http_Client::ENC_URLENCODED);// tekst
//        $client->setParameterPost(array('key' => 'value'));
//        
//        $response = $client->request('POST');// opwel PUT, POST, DELETE 
//        echo $response->getBody();
        
        
        
        // the get command
//      $client->setUri('http://localhost:8010/Api/Page/1');
//       $response = $client->request('GET');// opwel PUT, POST, DELETE 
//        echo $response->getBody();
           
        
        // hiermee kan dan worden gecommuniseerd met andere systmen
        // the POST
        $post = array('field' => 'value');
        $client->setUri('http://localhost:8010/Api/Page');
        
        $client->setEncType(Zend_Http_Client::ENC_URLENCODED);// tekst
        $client->setParameterPost($post);
        
        $response = $client->request('POST');// opwel PUT, POST, DELETE 
        //echo $response->getBody();
        var_dump($response);
        
        
//      $client->setUri('http://localhost:8010/api');
//       $response = $client->request('DELETE');// opwel PUT, post, DELETE 
//        echo $response->getBody();
    }
    

}

