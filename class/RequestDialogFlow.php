<?php

require_once 'vendor/autoload.php';
use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryInput;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Client;

class RequestDialogFlow 
{

    function __construct() {

        $this->projectId = "apigratis-uueh";
        $this->sessionId = uniqid();
        
        $guzzleClient = new Client([ 'verify' => false ]);
        $root_directory = $_SERVER['DOCUMENT_ROOT'];

        $credentialObject = [
            'credentials' => $root_directory.DIRECTORY_SEPARATOR.'/credentials.json',
            'transportConfig' => [
                'rest' => [
                    'httpHandler' => function (RequestInterface $request, array $options = []) use ($guzzleClient) {
                        return $guzzleClient->sendAsync($request, $options);
                    }
                ]
            ]
        ];

        $this->sessionsClient = new SessionsClient($credentialObject);
        $this->sessionName = $this->sessionsClient->sessionName($this->projectId, $this->sessionId);
        $this->textInput = new TextInput();
        $this->queryInput = new QueryInput();

    }

    function requestDefault($question)
    {
        try {

            $this->textInput->setText($question);
            $this->textInput->setLanguageCode('pt-BR');
            $this->queryInput->setText($this->textInput);
    
            $response = $this->sessionsClient->detectIntent($this->sessionName, $this->queryInput);
            $queryResult = $response->getQueryResult();
            //$queryText = $queryResult->getQueryText();
            //$intent = $queryResult->getIntent();
            //$displayName = $intent->getDisplayName();
            //$confidence = $queryResult->getIntentDetectionConfidence();
            $fulfilmentText = $queryResult->getFulfillmentText();
    
            return $fulfilmentText;
            
        } catch (\Throwable $th) {
            throw $th;
        }
       
        
    }

}
?>

