<?php

declare(strict_types=1);

namespace Delivery\Dto\Transformers\Request;


use Delivery\Dto\Requests\ProductDataDeliveryADto;

class ProductDataDeliveryADtoTransformer extends AbstractProductDataDtoTransformer
{
    /**
     * @param array $product
     * @return ProductDataDeliveryADto
     */
    public static function transformFromArray(array $product): ProductDataDeliveryADto
    {
        $dto = new ProductDataDeliveryADto();
        $dto->setDepth((float) $product['depth']);
        $dto->setHeight((float) $product['height']);
        $dto->setWeight((float) $product['weight']);
        $dto->setWidth((float) $product['width']);

        return $dto;
    }
}
