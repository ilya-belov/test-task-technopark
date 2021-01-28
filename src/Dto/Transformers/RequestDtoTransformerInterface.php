<?php


namespace App\Dto\Transformers;


use Symfony\Component\HttpFoundation\Request;

interface RequestDtoTransformerInterface
{
    public function transformFromObject(Request $object);
    public function transformFromObjects(iterable $objects): iterable;
}