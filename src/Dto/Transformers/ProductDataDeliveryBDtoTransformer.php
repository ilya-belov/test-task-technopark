<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use App\Dto\Requests\ProductDataDeliveryBDto;

class ProductDataDeliveryBDtoTransformer extends AbstractProductDataDtoTransformer
{
    /**
     * @param array $product
     * @return ProductDataDeliveryBDto
     */
    public function transformFromObject(array $product): ProductDataDeliveryBDto
    {
        $dto = new ProductDataDeliveryBDto();
        $dto->setDepth($product['depth']);
        $dto->setHeight($product['height']);
        $dto->setWeight($product['weight']);
        $dto->setWidth($product['width']);
        $dto->setCount($product['count']);

        return $dto;
    }
}