<?php


namespace App\Tests\Validator;

use App\Validators\ValidateDateTime;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    private $validUTCString = "2021-05-02 19:27:43";

    public function testValidUTC()
    {
        $datetime = ValidateDateTime::validate($this->validUTCString);
        $this->assertInstanceOf(\DateTime::class, $datetime);
    }
}