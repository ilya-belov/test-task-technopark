<?php

declare(strict_types=1);

namespace App\Dto\Requests;


use JMS\Serializer\Annotation as Serialization;

class DeliveryARequestDto extends AbstractDeliveryDtoRequestDto
{
    /**
     * @Serialization\Type("array<App\Dto\Requests\ProductDataDeliveryADto>")
     */
    public array $productsData;
}
