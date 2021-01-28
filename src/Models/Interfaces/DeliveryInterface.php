<?php

declare(strict_types=1);

namespace App\Models\Interfaces;


interface DeliveryInterface
{
    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $productsData
     * @return array
     */
    public function getDeliveryInfo(string $senderAddress, string $recipientAddress, array $productsData): array;
}