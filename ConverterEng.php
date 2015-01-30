<?php

class ConverterEng implements ConverterInterface
{

    public function convert($number)
    {
        if (!is_int($number)) {
            throw new InvalidArgumentException('You enter not integer: ' . $number);
        }

        $num20 = [
            '',
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve',
            'thirteen',
            'fourteen',
            'fifteen',
            'sixteen',
            'seventeen',
            'eighteen',
            'nineteen'
        ];

        $tens  = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
        $units = ['', 'hundred', 'thousand', 'million'];

        $parts       = explode(',', (string)number_format($number));
        $partsNumber = count($parts);
        $result      = [];

        $i = 0;
        while (!empty($parts)) {

            $num = floor($parts[$i] / 100);
            $remainder = $parts[$i] % 100;

            if ($num >= 1 || ($partsNumber > 1 && $num >= 1)) {
                $result[] = $num20[$num] . ' ' . $units[1];
                $parts[$i] -= $num * 100;
            }

            if ($remainder < 20) {
                if ($remainder > 0) {
                    $result[] = $num20[$remainder];
                }
                $parts[$i] -= $remainder;
            } else {
                $result[] = $tens[((int)($remainder / 10)) - 2];
                $parts[$i] -= (int)($remainder / 10) * 10;
            }

            if ($parts[$i] == 0) {
                unset($parts[$i]);
                if ($i != 2 && $partsNumber > 1) {
                    $result[] = $units[($partsNumber - $i)];
                }
                ++$i;
            }

        }

        return implode(' ', $result);
    }

    /**
     * @return string - language code according to ISO 639-2/T
     */
    public function getLanguage()
    {
        return 'eng';
    }
}