<?php


namespace App\Tests\Converters;

use App\Converters\ConverterContext;
use PHPUnit\Framework\TestCase;

class ConverterContextTest extends TestCase
{
    private $validUTCString = "2021-05-02 19:27:43";
    private $invalidUTCString = "INVALID";

    public function testConvertContextDateWithValidUTC()
    {
        $converterContext = new ConverterContext();
        $response = $converterContext->convertContextDate($this->validUTCString);
        $this->assertJsonStringEqualsJsonString($response->getContent(),
            "{\"message\":\"OK\",
            \"data\":{
            \"Mars Sol Date \u0027MSD\u0027\":52375.32071,
            \"Martian Coordinated Time \u0027MTC\u0027\":\"07:41:49\"
            }}");
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testConvertContextDateWithInvalidUTC()
    {
        $converterContext = new ConverterContext();
        $response = $converterContext->convertContextDate($this->invalidUTCString);
        $this->assertJsonStringEqualsJsonString($response->getContent(),
            "{\"message\":\"Given UTC is invalid!\"}");
        $this->assertSame(400, $response->getStatusCode());
    }

}