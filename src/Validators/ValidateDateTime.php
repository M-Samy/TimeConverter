<?php


namespace App\Validators;


class ValidateDateTime
{
    public static function validate($utcTimeString): \DateTime
    {
        if (!$dateTime = \DateTime::createFromFormat("Y-m-d H:i:s", $utcTimeString)) {
            throw new \InvalidArgumentException('Given UTC is invalid!');
        }

        return $dateTime;
    }
}