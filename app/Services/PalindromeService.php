<?php

namespace App\Services;

class PalindromeService
{
    public function PalindromeCheck($string): string
    {
        $symbols = array(' ', '.', ',' , '?', '!', ':');
        $string = str_replace($symbols, '', $string);
        $string = mb_strtolower($string);        
        if ($string == $this->replace($string)){
            return 'Палиндром!';
        }
        else return 'Не палиндром!';
}

private function replace($str)
    {
        $str = iconv('utf-8', 'windows-1251', $str);
        $str = strrev($str);
        $str = iconv('windows-1251', 'utf-8', $str);
        return $str;
    }
}
