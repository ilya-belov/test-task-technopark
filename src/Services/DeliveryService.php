<?php

declare(strict_types=1);

namespace App\Services;


use App\Dto\Requests\DeliveryDtoRequestInterface;
use App\Enums\DeliveriesEnum;
use App\Factories\DeliveryFactory;
use Exception;

class DeliveryService
{
    /**
     * @param array $data<string, DeliveryDtoRequestInterface>
     * @return array
     * @throws Exception
     */
    public function getDeliveryInfo(array $data): array
    {
        $result = [];

        /**
         * @var string $deliveryName
         * @var DeliveryDtoRequestInterface $deliveryData
         */
        foreach ($data as $deliveryName => $deliveryData) {
            $delivery = DeliveryFactory::create(DeliveriesEnum::getByKey($deliveryName));
            $result[$deliveryName] = $delivery->getDeliveryInfo(
                $deliveryData->getSenderAddress(),
                $deliveryData->getRecipientAddress(),
                $deliveryData->getProductsData(),
            );
        }

        return $result;
    }
}