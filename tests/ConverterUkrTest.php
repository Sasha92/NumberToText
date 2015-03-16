<?php

class ConverterUkrTest extends PHPUnit_Framework_TestCase
{

    /** @var  ConverterUkr */
    protected $converter;

    public function setUp()
    {
        $this->converter = new ConverterUkr();
    }

    public function testConvertSmallNumbers()
    {
        $this->assertEquals('один', $this->converter->convert(1));
        $this->assertEquals('два', $this->converter->convert(2));
        $this->assertEquals('три', $this->converter->convert(3));
        $this->assertEquals('чотири', $this->converter->convert(4));
        $this->assertEquals('п\'ять', $this->converter->convert(5));
        $this->assertEquals('шість', $this->converter->convert(6));
        $this->assertEquals('сім', $this->converter->convert(7));
        $this->assertEquals('вісім', $this->converter->convert(8));
        $this->assertEquals('дев\'ять', $this->converter->convert(9));
        $this->assertEquals('десять', $this->converter->convert(10));
        $this->assertEquals('одинадцять', $this->converter->convert(11));
        $this->assertEquals('дванадцять', $this->converter->convert(12));
        $this->assertEquals('тринадцять', $this->converter->convert(13));
        $this->assertEquals('чотирнадцять', $this->converter->convert(14));
        $this->assertEquals('п\'ятнадцять', $this->converter->convert(15));
        $this->assertEquals('шістнадцять', $this->converter->convert(16));
        $this->assertEquals('сімнадцять', $this->converter->convert(17));
        $this->assertEquals('вісімнадцять', $this->converter->convert(18));
        $this->assertEquals('дев\'ятнадцять', $this->converter->convert(19));
    }

    public function testTens()
    {
        $this->assertEquals('двадцять', $this->converter->convert(20));
        $this->assertEquals('тридцять', $this->converter->convert(30));
        $this->assertEquals('сорок', $this->converter->convert(40));
        $this->assertEquals('п\'ятдесят', $this->converter->convert(50));
        $this->assertEquals('шістдесят', $this->converter->convert(60));
        $this->assertEquals('сімдесят', $this->converter->convert(70));
        $this->assertEquals('вісімдесят', $this->converter->convert(80));
        $this->assertEquals('дев\'яносто', $this->converter->convert(90));
    }

    public function testBigNumber()
    {
        $this->assertEquals('два мільйони сорок п\'ять тисяч дев\'яносто вісім', $this->converter->convert(2045098));
        $this->assertEquals('один мільйон одна тисяча шістсот сімдесят три', $this->converter->convert(1001673));
        $this->assertEquals('п\'ятсот сорок три мільйони дві тисячі шістсот сімдесят три', $this->converter->convert(543002673));
        $this->assertEquals('двадцять п\'ять мільйонів сто двадцять одна тисяча вісімсот сімдесят п\'ять', $this->converter->convert(25121875));
        $this->assertEquals('двадцять чотири тисячі', $this->converter->convert(24000));
    }

}