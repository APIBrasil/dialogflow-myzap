<?php
    require('./WebHook.php');

    $webhook = new Webhook;
    echo $webhook->handler();

?>