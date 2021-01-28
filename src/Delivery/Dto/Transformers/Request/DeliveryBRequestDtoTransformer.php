<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


use Delivery\Dto\Requests\DeliveryARequestDto;

class DeliveryBRequestDtoTransformer extends AbstractRequestDtoTransformer
{
    /**
     * @param array $arr
     * @return DeliveryARequestDto
     */
    public static function transformFromArray(array $arr): DeliveryARequestDto
    {
        $dto = new DeliveryARequestDto();

        $dto->setSenderAddress($arr['sender_address']);
        $dto->setRecipientAddress($arr['recipient_address']);
        $dto->setProductsData(ProductDataDeliveryBDtoTransformer::transformFromArrays($arr['product_data']));

        return $dto;
    }
}