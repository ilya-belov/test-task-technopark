<?php


namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

interface ProductDataDtoTransformerInterface
{
    public static function transformFromObject(array $product);
    public static function transformFromObjects(array $products): array;
}