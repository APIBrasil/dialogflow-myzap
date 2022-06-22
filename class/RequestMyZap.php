<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

class RequestMyZap
{

    function __construct()
    {
        $this->dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
        $this->log = fopen("log.txt", "a") or die("Unable to open file!");
    }

    function requestDefault($data, $question)
    {
        try {

            $receive = json_decode($data);
            $srv = $this->dotenv->load('SRV_MYZAP')['SRV_MYZAP'];
            $activeLog = $this->dotenv->load('LOG')['LOG'];

            if($activeLog == 'true'){
                fwrite($this->log, $data);
                fclose($this->log);
            }

            $client = new Client([ 'verify' => false ]);

            $response = $client->post($srv.'sendText', [
                'json' => [
                    "session" => $receive->session,
                    "number" => $receive->from,
                    "text" => $question
                ],
                'headers' => [
                    'Content-Type' => 'application/json',
                    'sessionkey' => $receive->session
                ]
            ]);

            return $response->getBody()->getContents();
            
        } catch (\Throwable $th) {
            return json_encode(['error' => true, 'message' => $th->getMessage()]);
        }
    }

}
?>