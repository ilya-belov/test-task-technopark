<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use App\Dto\Requests\DeliveryARequestDto;
use Symfony\Component\HttpFoundation\Request;

class DeliveryBRequestRequestDtoTransformer extends AbstractRequestRequestDtoTransformer
{
    private ProductDataDeliveryBDtoTransformer $productTransformer;

    /**
     * DeliveryBRequestRequestDtoTransformer constructor.
     * @param ProductDataDeliveryBDtoTransformer $productTransformer
     */
    public function __construct(ProductDataDeliveryBDtoTransformer $productTransformer)
    {
        $this->productTransformer = $productTransformer;
    }

    /**
     * @param Request $object
     * @return DeliveryARequestDto
     */
    public function transformFromObject(Request $object): DeliveryARequestDto
    {
        $dto = new DeliveryARequestDto();
        $params = $object->toArray();

        $dto->setSenderAddress($params['sender_address']);
        $dto->setRecipientAddress($params['recipient_address']);
        $dto->setProductsData($this->productTransformer->transformFromObjects($params['product_data']));

        return $dto;
    }
}