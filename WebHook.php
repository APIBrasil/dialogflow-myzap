<?php

require('./class/RequestDialogFlow.php');
require('./class/RequestMyZap.php');

class WebHook 
{

    function __construct() {
        $this->dialoflow = new RequestDialogFlow;
        $this->myzap = new RequestMyZap;
        $this->url = $_SERVER['REQUEST_URI'];
        header('Content-Type: application/json');
    }

    function handler()
    {
        
        $routeExist = file_exists('./'.$this->url.'.php');
        $this->checkRoute($routeExist);

        $receive = file_get_contents('php://input');
        $data = json_decode($receive);

        if($data->wook == "RECEIVE_MESSAGE" and $data->type = "text" and $data->isGroupMsg == false){

            $send = $this->dialoflow->requestDefault($data->content);
            $myzap = $this->myzap->requestDefault($receive, $send);

            return $myzap;
        }
        
    }

    function checkRoute($routeExist)
    {
        if($routeExist === false) {
            header('HTTP/1.1 404 Route Not Found');
            echo json_encode(["error" => true, 'message' => 'Route does not exist.']);die;
        }
    }
}

$webhook = new Webhook;
echo $webhook->handler();

?>