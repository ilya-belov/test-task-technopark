<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DeliveryController extends AbstractController
{
    public function index(Request $request): JsonResponse
    {
        return new JsonResponse($request);
    }
}