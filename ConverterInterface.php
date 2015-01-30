<?php


interface ConverterInterface
{
    public function convert($number);

    /**
     * @return string - language code according to ISO 639-2/T
     */
    public function getLanguage();
}