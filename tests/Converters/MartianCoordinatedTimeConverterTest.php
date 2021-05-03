<?php


namespace App\Tests\Converters;

use App\Converters\MartianCoordinatedTimeConverter;
use PHPUnit\Framework\TestCase;

class MartianCoordinatedTimeConverterTest extends TestCase
{
    private $msdTime = 52375.32071;
    private $mcTime = "07:41:49";
    private $mtcConverterName = "Martian Coordinated Time 'MTC'";

    public function testGetConverterName()
    {
        $mtcConverterName = MartianCoordinatedTimeConverter::getConverterName();
        $this->assertIsString($mtcConverterName);
        $this->assertEquals($mtcConverterName, $this->mtcConverterName);
    }

    public function testMSDConverter()
    {
        $formattedMCT = MartianCoordinatedTimeConverter::convert($this->msdTime);
        $this->assertEquals($this->mcTime, $formattedMCT);
        $this->assertIsString($formattedMCT);
    }

}