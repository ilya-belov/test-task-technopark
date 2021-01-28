<?php

declare(strict_types=1);

namespace Delivery\Services;


use Delivery\Dto\Requests\DeliveryDtoRequestInterface;
use Delivery\Enums\DeliveriesEnum;
use Delivery\Factories\DeliveryFactory;
use Exception;

class DeliveryService
{
    /**
     * @param array $data<string, DeliveryDtoRequestInterface>
     * @return array
     * @throws Exception
     */
    public function calculateDeliveryInfo(array $data): array
    {
        $result = [];

        /**
         * @var string $deliveryName
         * @var DeliveryDtoRequestInterface $deliveryData
         */
        foreach ($data as $deliveryName => $deliveryData) {
            $delivery = DeliveryFactory::create(DeliveriesEnum::getByKey($deliveryName));
            $result[$deliveryName] = $delivery->calculateDeliveryInfo(
                $deliveryData->getSenderAddress(),
                $deliveryData->getRecipientAddress(),
                $deliveryData->getProductsData(),
            );
        }

        return $result;
    }
}