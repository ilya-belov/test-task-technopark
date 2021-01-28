<?php

declare(strict_types=1);

namespace Delivery\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

class DeliveryARequestDto extends AbstractDeliveryRequestDto
{
    /**
     * @Serialization\Type("array<Delivery\Dto\Requests\ProductDataDeliveryADto>")
     */
    public array $productsData;
}
