<?php


namespace App\Converters;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ConverterContext
{
    public function convertContextDate($utcTimeString)
    {
        $response = new JsonResponse();

        try {
            $utcTime = new \DateTime($utcTimeString);
            $timestamp = $utcTime->getTimestamp();
            $msdData = MarsSolDateConverter::convert($timestamp);
            $mctData = MartianCoordinatedTimeConverter::convert($msdData);

            $body = [
                MarsSolDateConverter::getConverterName() => $msdData,
                MartianCoordinatedTimeConverter::getConverterName() => $mctData
            ];
            $response->setData([
                'message' => 'OK',
                'data' => $body
            ]);
            $response->setStatusCode(Response::HTTP_OK);
        } catch (\Exception $e) {
            $response->setData([
                'message' => $e->getMessage(),
            ]);
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        }

        return $response;
    }
}