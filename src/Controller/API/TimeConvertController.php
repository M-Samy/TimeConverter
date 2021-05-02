<?php

namespace App\Controller\API;

use App\Converters\ConverterContext;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TimeConvertController extends AbstractController
{
    public function convert(Request $request): JsonResponse
    {
        $converterContext = new ConverterContext();
        $jsonRequest = json_decode($request->getContent(), true);
        $utcTimeString = $jsonRequest["utc"];
        $response = $converterContext->convertContextDate($utcTimeString);

        return $response;
    }
}
