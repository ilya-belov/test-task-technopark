<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use App\Dto\Requests\DeliveryARequestDto;
use Symfony\Component\HttpFoundation\Request;

class DeliveryBRequestRequestDtoTransformer extends AbstractRequestRequestDtoTransformer
{
    /**
     * @param Request $object
     * @return DeliveryARequestDto
     */
    public static function transformFromObject(Request $object): DeliveryARequestDto
    {
        $dto = new DeliveryARequestDto();
        $params = $object->toArray();

        $dto->setSenderAddress($params['sender_address']);
        $dto->setRecipientAddress($params['recipient_address']);
        $dto->setProductsData(ProductDataDeliveryBDtoTransformer::transformFromObjects($params['product_data']));

        return $dto;
    }
}