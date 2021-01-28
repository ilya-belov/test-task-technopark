<?php

declare(strict_types=1);

namespace Delivery\Controller;

use Delivery\Services\DeliveryRequestSerializerService;
use Delivery\Services\DeliveryService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DeliveryController extends AbstractController
{
    /**
     * @var DeliveryRequestSerializerService
     */
    private DeliveryRequestSerializerService $requestSerializer;

    /**
     * @var DeliveryService
     */
    private DeliveryService $deliveryService;

    /**
     * DeliveryController constructor.
     * @param DeliveryRequestSerializerService $requestSerializer
     * @param DeliveryService $deliveryService
     */
    public function __construct(DeliveryRequestSerializerService $requestSerializer, DeliveryService $deliveryService)
    {
        $this->requestSerializer = $requestSerializer;
        $this->deliveryService = $deliveryService;
    }

    public function index(Request $request): JsonResponse
    {
        try {
            $response = $this->deliveryService->calculateDeliveryInfo($this->requestSerializer->serialize($request));
            return new JsonResponse($response);
        } catch (Exception $exception) {
            return new JsonResponse($exception->getMessage(), 404);
        }
    }
}
