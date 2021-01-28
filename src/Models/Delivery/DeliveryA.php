<?php

declare(strict_types=1);

namespace App\Models\Delivery;


use App\Models\Interfaces\DeliveryInterface;

class DeliveryA implements DeliveryInterface
{
    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $productsData
     * @return array<string, string|int>
     */
    public function getDeliveryInfo(string $senderAddress, string $recipientAddress, array $productsData): array
    {
        # очень сложная логика вычисления
        # бррр....

        return [
            'price' => count($productsData) * 100,
            'days' => (strlen($senderAddress) + strlen($recipientAddress)) / 10,
        ];
    }
}