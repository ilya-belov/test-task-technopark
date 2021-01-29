<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


use Delivery\Dto\Requests\ProductDataDeliveryBDto;

class ProductDataDeliveryBDtoTransformer extends AbstractProductDataDtoTransformer
{
    /**
     * @param array $product
     * @return ProductDataDeliveryBDto
     */
    public static function transformFromArray(array $product): ProductDataDeliveryBDto
    {
        $dto = new ProductDataDeliveryBDto();
        $dto->setDepth((float) $product['depth']);
        $dto->setHeight((float) $product['height']);
        $dto->setWeight((float) $product['weight']);
        $dto->setWidth((float) $product['width']);
        $dto->setCount((int) $product['count']);

        return $dto;
    }
}
