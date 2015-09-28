<?php

namespace Spitoglou\SMS;

use GuzzleHttp\Client as HttpClient;

class SMSClass
{

    /**
     * @param SMSRecipient $recipient
     * @param string       $message
     * @return string
     */
    public static function SMSSend(SMSRecipient $recipient, $message = 'Test Message')
    {
        $client = new HttpClient();

        $send = urldecode($message);
        $response = $client->request(
            'GET',
            'https://api.doluna.net/sms/send', [
            'query' => [
                'api_service_key' => config('sms.dolunaAPIKey'),
                'msg_senderid' => 'Stavros CSSA',
                'msg_to' => "{$recipient}",
                'msg_text' => $send,
                'msg_clientref' => 'abcdef123456',
                'msg_dr' => 'bar',
                'output' => 'json',
                'type' => 'unicode',
            ],
            'verify' => false,
        ]);

        return $response->getBody()->getContents();
    }


}
