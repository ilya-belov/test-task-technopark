<?php

declare(strict_types=1);


namespace App\Dto\Requests;


interface DeliveryDtoRequestInterface
{
    /**
     * @return string
     */
    public function getSenderAddress(): string;

    /**
     * @param string $senderAddress
     */
    public function setSenderAddress(string $senderAddress): void;

    /**
     * @return string
     */
    public function getRecipientAddress(): string;

    /**
     * @param string $recipientAddress
     */
    public function setRecipientAddress(string $recipientAddress): void;

    /**
     * @return array
     */
    public function getProductsData(): array;

    /**
     * @param array $productsData
     */
    public function setProductsData(array $productsData): void;
}