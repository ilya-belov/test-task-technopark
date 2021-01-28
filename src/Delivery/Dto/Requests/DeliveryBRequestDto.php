<?php

declare(strict_types=1);

namespace Delivery\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

class DeliveryBRequestDto extends AbstractDeliveryRequestDto
{
    /**
     * @Serialization\Type("array<Delivery\Dto\Requests\ProductDataDeliveryBDto>")
     */
    public array $productsData;
}
