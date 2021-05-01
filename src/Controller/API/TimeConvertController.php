<?php

namespace App\Controller\API;

use App\Converters\ConverterContext;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class TimeConvertController extends AbstractController
{
    public function convert(): JsonResponse
    {
        $response = new JsonResponse();
        $converterContext = new ConverterContext();
        $payload = new \DateTime();

        $response->setData($converterContext->convertContextDate($payload));

        return $response;
    }
}
