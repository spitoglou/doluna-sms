<?php

namespace Spitoglou\SMS;

use GuzzleHttp\Client as HttpClient;

/**
 * Class SMSClass
 * Main Package Class
 * @package Spitoglou\SMS
 */
class SMSClass
{

    /**
     * Sends a SMS message utilizing the DOLUNA API
     * @param SMSRecipient $recipient
     * @param string $message
     * @return string
     */
    public static function SMSSend(SMSRecipient $recipient, $message = 'Test Message')
    {
        $client = new HttpClient();

        $send = urldecode($message);
        $response = $client->request(
            'GET',
            'https://api.doluna.net/sms/send',
            [
                'query' => [
                    'api_service_key' => config('sms.dolunaAPIKey'),
                    'msg_senderid' => config('sms.senderId'),
                    'msg_to' => "{$recipient}",
                    'msg_text' => $send,
                    'msg_clientref' => config('sms.clientref'),
                    'msg_dr' => config('sms.dr'),
                    'output' => config('sms.output'),
                    'type' => config('sms.type'),
                ],
                'verify' => false
            ]
        );

        return $response->getBody()->getContents();
    }


}
