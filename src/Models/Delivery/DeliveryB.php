<?php

declare(strict_types=1);

namespace App\Models\Delivery;


use App\Models\Interfaces\DeliveryInterface;
use DateInterval;
use DateTimeImmutable;
use Exception;

class DeliveryB implements DeliveryInterface
{
    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $productsData
     * @return array<string, DateTimeImmutable|float>
     * @throws Exception
     */
    public function getDeliveryInfo(string $senderAddress, string $recipientAddress, array $productsData): array
    {
        # очень сложная логика вычисления
        # бррр....

        $date = new DateTimeImmutable('now');
        $days = (strlen($senderAddress) + strlen($recipientAddress));
        $date->add(new DateInterval("P{$days}D"));

        return [
            'coefficient' => 150 * (5 + count($productsData) * 10) / 2.5,
            'date' => $date->format('d-m-Y'),
        ];
    }
}