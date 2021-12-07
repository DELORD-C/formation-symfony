<?php

namespace App\Services;

class Messager
{
    static public function randomMessage (): String {
        $array = [
          'Bravo pour cet article formidable !',
          'Incroyable article !',
          'C\'est tellement bien que c\'est super !',
          'Votre article est digne des plus grands journalistes.'
        ];

        return $array[array_rand($array)];
    }
}