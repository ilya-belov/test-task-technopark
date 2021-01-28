<?php

declare(strict_types=1);

namespace Delivery\Services\Interfaces;


interface CalculateDeliveryInfoInterface
{
    /**
     * @param string $senderAddress
     * @param string $recipientAddress
     * @param array $productsData
     * @return array
     */
    public function calculateDeliveryInfo(string $senderAddress, string $recipientAddress, array $productsData): array;
}