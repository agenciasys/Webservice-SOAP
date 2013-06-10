<?php
include '../init_config.php';

if (isset($_GET['wsdl'])) {
    // Gerando o wsdl dinamicamente com o Zend_Soap_AutoDiscover
    $autodiscover = new Zend_Soap_AutoDiscover();
    $autodiscover->setClass('Message');
    $autodiscover->handle();
} else {
    $soap = new Zend_Soap_Server("http://127.0.0.1:8082/soap/Message.php?wsdl");
    $soap->setClass('Message');
    $soap->handle();
}

class Message
{
    /**
     * @param string $msg
     * @return string
     */
    public function message($msg)
    {
        return '<b>' . $msg . '</b>';
    }
}