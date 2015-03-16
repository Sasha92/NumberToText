<?php

class ConveterRusTest extends PHPUnit_Framework_TestCase
{

    /** @var  ConverterRus */
    protected $converter;

    public function setUp()
    {
        $this->converter = new ConverterRus();
    }

    public function testConvertSmallNumbers()
    {
        $this->assertEquals('один', $this->converter->convert(1));
        $this->assertEquals('два', $this->converter->convert(2));
        $this->assertEquals('три', $this->converter->convert(3));
        $this->assertEquals('четыре', $this->converter->convert(4));
        $this->assertEquals('пять', $this->converter->convert(5));
        $this->assertEquals('шесть', $this->converter->convert(6));
        $this->assertEquals('семь', $this->converter->convert(7));
        $this->assertEquals('восемь', $this->converter->convert(8));
        $this->assertEquals('девять', $this->converter->convert(9));
        $this->assertEquals('десять', $this->converter->convert(10));
        $this->assertEquals('одиннадцать', $this->converter->convert(11));
        $this->assertEquals('двенадцать', $this->converter->convert(12));
        $this->assertEquals('тринадцать', $this->converter->convert(13));
        $this->assertEquals('четырнадцать', $this->converter->convert(14));
        $this->assertEquals('пятнадцать', $this->converter->convert(15));
        $this->assertEquals('шестнадцать', $this->converter->convert(16));
        $this->assertEquals('семнадцать', $this->converter->convert(17));
        $this->assertEquals('восемнадцать', $this->converter->convert(18));
        $this->assertEquals('девятнадцать', $this->converter->convert(19));
    }

    public function testTens()
    {
        $this->assertEquals('двадцать', $this->converter->convert(20));
        $this->assertEquals('тридцать', $this->converter->convert(30));
        $this->assertEquals('сорок', $this->converter->convert(40));
        $this->assertEquals('пятьдесят', $this->converter->convert(50));
        $this->assertEquals('шестьдесят', $this->converter->convert(60));
        $this->assertEquals('семьдесят', $this->converter->convert(70));
        $this->assertEquals('восемьдесят', $this->converter->convert(80));
        $this->assertEquals('девяносто', $this->converter->convert(90));
    }

    public function testBigNumber()
    {
        $this->assertEquals('два миллиона сорок пять тысяч девяносто восемь', $this->converter->convert(2045098));
        $this->assertEquals('один миллион одна тысяча шестьсот семьдесят три', $this->converter->convert(1001673));
        $this->assertEquals('пятьсот сорок три миллиона две тысячи шестьсот семьдесят три', $this->converter->convert(543002673));
        $this->assertEquals('двадцать пять миллионов сто двадцать одна тысяча восемьсот семьдесят пять', $this->converter->convert(25121875));
        $this->assertEquals('двадцать четыре тысячи', $this->converter->convert(24000));
    }

}