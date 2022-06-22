<?php

require('./class/RequestDialogFlow.php');
require('./class/RequestMyZap.php');

class WebHook 
{
    function __construct() {

        $this->url = $_SERVER['REQUEST_URI'];
        $routeExist = file_exists('./'.$this->url.'.php');
        $this->checkRoute($routeExist);

        $this->dialoflow = new RequestDialogFlow;
        $this->myzap = new RequestMyZap;
    }

    function handler()
    {

        $receive = file_get_contents('php://input');
        $data = json_decode($receive);

        if($data->wook == "RECEIVE_MESSAGE" and $data->type = "text" and $data->isGroupMsg == false){

            //var_dump($data->content);die;
            $send = $this->dialoflow->requestDefault($data->content);

            $myzap = $this->myzap->requestDefault($receive, $send);

            return $myzap;
        }
        
    }

    function checkRoute($routeExist)
    {
        if($routeExist === false and $_SERVER['REQUEST_METHOD'] === 'GET') {
            echo json_encode(["error" => true, 'message' => 'Route does not exist.'], 404);die;
        }
    }
}

?>