<?php

class NumberToTextTest extends PHPUnit_Framework_TestCase
{
    /** @var  NumberToText */
    protected $numberToText;

    public function setUp()
    {
        $this->numberToText = new NumberToText();
        $this->numberToText->addConverter(new ConverterEng());
        $this->numberToText->addConverter(new ConverterRus());
        $this->numberToText->addConverter(new ConverterUkr());
    }

    public function testConvertInDifferentLanguages()
    {
        $number = 1200342;

        $inWordsEng = $this->numberToText->convert($number, 'eng');
        $inWordsRus = $this->numberToText->convert($number, 'rus');
        $inWordsUkr = $this->numberToText->convert($number, 'ukr');

        $this->assertEquals('one million two hundred thousand three hundred forty two', $inWordsEng);
        $this->assertEquals('один миллион двести тысяч триста сорок два', $inWordsRus);
        $this->assertEquals('один мільйон двісті тисяч триста сорок два', $inWordsUkr);
    }
}