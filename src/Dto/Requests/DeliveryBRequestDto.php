<?php

declare(strict_types=1);

namespace App\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

class DeliveryBRequestDto extends AbstractDeliveryDtoRequestDto
{
    /**
     * @Serialization\Type("array<App\Dto\Requests\ProductDataDeliveryBDto>")
     */
    public array $productsData;
}
