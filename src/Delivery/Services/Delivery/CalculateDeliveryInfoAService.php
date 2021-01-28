<?php

declare(strict_types=1);

namespace Delivery\Services\Delivery;


use Delivery\Services\Interfaces\CalculateDeliveryInfoInterface;

class CalculateDeliveryInfoAService implements CalculateDeliveryInfoInterface
{
    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $productsData
     * @return array<string, string|int>
     */
    public function calculateDeliveryInfo(string $senderAddress, string $recipientAddress, array $productsData): array
    {
        # очень сложная логика вычисления
        # бррр....

        return [
            'price' => count($productsData) * 100,
            'days' => (strlen($senderAddress) + strlen($recipientAddress)) / 10,
        ];
    }
}