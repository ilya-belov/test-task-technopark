<?php


namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

interface ProductDataDtoTransformerInterface
{
    public function transformFromObject(array $product);
    public function transformFromObjects(array $products): array;
}