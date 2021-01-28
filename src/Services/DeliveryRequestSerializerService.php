<?php

declare(strict_types=1);

namespace App\Services;


use App\Dto\Requests\DeliveryDtoRequestInterface;
use Symfony\Component\HttpFoundation\Request;

class DeliveryRequestSerializerService
{
    public function serialize(Request $request): DeliveryDtoRequestInterface
    {
        
    }
}