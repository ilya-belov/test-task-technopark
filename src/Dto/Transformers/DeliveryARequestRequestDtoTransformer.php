<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use App\Dto\Requests\DeliveryARequestDto;
use Symfony\Component\HttpFoundation\Request;

class DeliveryARequestRequestDtoTransformer extends AbstractRequestRequestDtoTransformer
{
    private ProductDataDeliveryADtoTransformer $productTransformer;

    /**
     * DeliveryARequestRequestDtoTransformer constructor.
     * @param ProductDataDeliveryADtoTransformer $productTransformer
     */
    public function __construct(ProductDataDeliveryADtoTransformer $productTransformer)
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