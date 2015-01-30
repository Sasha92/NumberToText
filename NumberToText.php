<?php

class NumberToText
{

    /**
     * @var ConverterInterface[]
     */
    private $converters;

    public function addConverter(ConverterInterface $converter)
    {
        $this->converters[$converter->getLanguage()] = $converter;
    }

    /**
     * @param int $number - number between  1 to 999 999 999
     * @param $language - language code according to ISO 639-2/T
     * @return string
     */
    public function convert($number, $language)
    {
        if (!isset($this->converters[$language])) {
            throw new InvalidArgumentException('Unknown language ' . $language);
        }

        $converter = $this->converters[$language];

        return $converter->convert($number);
    }
}

function __autoload($class)
{
    require_once "$class.php";
}

$number = new NumberToText();
$number->addConverter(new ConverterEng());
$number->addConverter(new ConverterRus());
$number->addConverter(new ConverterUkr());
$number->convert(345678059,'eng');
$number->convert(345678059,'rus');
$number->convert(345678059,'ukr');

