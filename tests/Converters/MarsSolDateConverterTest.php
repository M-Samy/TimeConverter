<?php


namespace App\Tests\Converters;

use App\Converters\MarsSolDateConverter;
use App\Validators\ValidateDateTime;
use PHPUnit\Framework\TestCase;

class MarsSolDateConverterTest extends TestCase
{
    private $validUTCString = "2021-05-02 19:27:43";
    private $msdTime = 52375.32071;
    private $msdConverterName = "Mars Sol Date 'MSD'";

    public function testGetConverterName()
    {
        $msdConverterName = MarsSolDateConverter::getConverterName();
        $this->assertIsString($msdConverterName);
        $this->assertEquals($msdConverterName, $this->msdConverterName);
    }

    public function testMSDConverter()
    {
        $utcTime = ValidateDateTime::validate($this->validUTCString);
        $timestamp = $utcTime->getTimestamp();
        $msdTime = MarsSolDateConverter::convert($timestamp);
        $this->assertEquals($this->msdTime, $msdTime);
    }

}