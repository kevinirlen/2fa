<?php

namespace App\Security\TwoFactor;

use Erkens\Security\TwoFactorTextBundle\Model\TwoFactorTextInterface;
use Erkens\Security\TwoFactorTextBundle\TextSender\AuthCodeTextInterface;
use Symfony\Component\HttpClient\HttpClient;

class AuthCodeText implements AuthCodeTextInterface
{
    private string $format;

    public function setMessageFormat(string $format): void
    {
        $this->format = $format;
    }

    public function getMessageFormat(): string
    {
       return $this->format;
    }

    public function sendAuthCode(TwoFactorTextInterface $user, ?string $code): void
    {
        HttpClient::create()->request(
            'POST',
            'https://sms.api.sinch.com/xms/v1/0a8879808d234025b2220c36db5d61ca/batches',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer 0af47e1ae3194a1a8f0970112d0e8d73',
                ],
                'body' => json_encode([
                    'to' => ['<your_number>'],
                    'from' => '447441421327',
                    'body' => $code,
                ])
            ]
        );
    }
}
