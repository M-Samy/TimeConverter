<?php


namespace App\Converters;


class ConverterContext
{
    public function convertContextDate($converter_name, $payload)
    {
        switch ($converter_name) {
            case "MSD":
                $responseStatus = MarsSolDateConverter::convert($payload);
                break;
            case "MTC":
                $responseStatus = MartianCoordinatedTimeConverter::convert($payload);
                break;
            default:
                $responseStatus = Null;
        }

        return $responseStatus;
    }
}