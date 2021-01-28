<?php

declare(strict_types=1);

namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

abstract class AbstractProductDataDtoTransformer implements ProductDataDtoTransformerInterface
{
    /**
     * @param array $products
     * @return array
     */
    public function transformFromObjects(array $products): array
    {
        $dto = [];

        foreach ($products as $product) {
            $dto[] = $this->transformFromObject($product);
        }

        return $dto;
    }

    abstract public function transformFromObject(array $product);
}