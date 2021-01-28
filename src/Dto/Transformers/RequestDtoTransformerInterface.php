<?php


namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

interface RequestDtoTransformerInterface
{
    public static function transformFromObject(Request $object);
    public static function transformFromObjects(iterable $objects): iterable;
}