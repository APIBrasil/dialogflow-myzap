<?php

    header('Content-Type: application/json');
    require('./WebHook.php');
    
    $webhook = new Webhook;
    $handler = $webhook->handler();
    echo $handler;

?>