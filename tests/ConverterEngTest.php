<?php

class ConverterEngTest extends PHPUnit_Framework_TestCase
{
    /** @var  ConverterEng */
    protected $converter;

    public function setUp()
    {
        $this->converter = new ConverterEng();
    }

    public function testConvertSmallNumbers()
    {
        $this->assertEquals('one', $this->converter->convert(1));
        $this->assertEquals('two', $this->converter->convert(2));
        $this->assertEquals('three', $this->converter->convert(3));
        $this->assertEquals('four', $this->converter->convert(4));
        $this->assertEquals('five', $this->converter->convert(5));
        $this->assertEquals('six', $this->converter->convert(6));
        $this->assertEquals('seven', $this->converter->convert(7));
        $this->assertEquals('eight', $this->converter->convert(8));
        $this->assertEquals('nine', $this->converter->convert(9));
        $this->assertEquals('ten', $this->converter->convert(10));
        $this->assertEquals('eleven', $this->converter->convert(11));
        $this->assertEquals('twelve', $this->converter->convert(12));
        $this->assertEquals('thirteen', $this->converter->convert(13));
        $this->assertEquals('fourteen', $this->converter->convert(14));
        $this->assertEquals('fifteen', $this->converter->convert(15));
        $this->assertEquals('sixteen', $this->converter->convert(16));
        $this->assertEquals('seventeen', $this->converter->convert(17));
        $this->assertEquals('eighteen', $this->converter->convert(18));
        $this->assertEquals('nineteen', $this->converter->convert(19));
    }

    public function testTens()
    {
        $this->assertEquals('twenty', $this->converter->convert(20));
        $this->assertEquals('thirty', $this->converter->convert(30));
        $this->assertEquals('forty', $this->converter->convert(40));
        $this->assertEquals('fifty', $this->converter->convert(50));
        $this->assertEquals('sixty', $this->converter->convert(60));
        $this->assertEquals('seventy', $this->converter->convert(70));
        $this->assertEquals('eighty', $this->converter->convert(80));
        $this->assertEquals('ninety', $this->converter->convert(90));
    }

    public function testBigNumber()
    {
        $this->assertEquals('two million forty five thousand ninety eight', $this->converter->convert(2045098));
        $this->assertEquals('one million one thousand six hundred seventy three', $this->converter->convert(1001673));
        $this->assertEquals('five hundred forty three million two thousand six hundred seventy three', $this->converter->convert(543002673));
        $this->assertEquals('twenty five million one hundred twenty one thousand eight hundred seventy five', $this->converter->convert(25121875));
        $this->assertEquals('twenty four thousand', $this->converter->convert(24000));
    }
}