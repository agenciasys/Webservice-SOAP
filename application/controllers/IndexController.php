<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $ws = new Zend_Soap_Client('http://127.0.0.1:8082/soap/Message.php?wsdl');
        echo $ws->message('Webservice funcionando');
    }


}

