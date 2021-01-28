<?php

declare(strict_types=1);


namespace App\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

abstract class AbstractDeliveryDtoRequestDto implements DeliveryDtoRequestInterface
{
    /**
     * @Serialization\Type("string")
     * @var string
     */
    public string $senderAddress;

    /**
     * @Serialization\Type("string")
     * @var string
     */
    public string $recipientAddress;

    /**
     * @Serialization\Type("array")
     * @var array
     */
    public array $productsData;

    /**
     * @return string
     */
    public function getSenderAddress(): string
    {
        return $this->senderAddress;
    }

    /**
     * @param string $senderAddress
     */
    public function setSenderAddress(string $senderAddress): void
    {
        $this->senderAddress = $senderAddress;
    }

    /**
     * @return string
     */
    public function getRecipientAddress(): string
    {
        return $this->recipientAddress;
    }

    /**
     * @param string $recipientAddress
     */
    public function setRecipientAddress(string $recipientAddress): void
    {
        $this->recipientAddress = $recipientAddress;
    }

    /**
     * @return array
     */
    public function getProductsData(): array
    {
        return $this->productsData;
    }

    /**
     * @param array $productsData
     */
    public function setProductsData(array $productsData): void
    {
        $this->productsData = $productsData;
    }
}
