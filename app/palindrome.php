<?php

namespace App;

class palindrome {
    /**
     * @var
     */
    public $palindrome;

    public function __construct(){}

    /**
     * retourne une chaîne de caractère, et son état (palindrome, ou non)
     *
     * @param string $str
     * @return string
     */
    public function true_or_not(string $str): string {
        $manage     = $this->slugify($str);
        $palindrome = $this->palindrome($manage);

        if ($palindrome === TRUE) {
            return "[PALINDROME] ". $str;
        } else {
            return "[NOT] ". $str;
        }
    }

    /**
     * Transforme une chaîne de caractère sans trop de complication
     * Enlève les espaces, les majuscules, et les signes de ponctuation.
     *
     * @param string $string
     * @return string
     */
    function slugify(string $string): string {
        $str = strtolower(trim(preg_replace('~[^0-9a-z]+~i', '', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));

        return $str;
    }

    /**
     * Vérifie si une chaîne de caractère est un palindrome, ou non.
     *
     * @param string $string
     * @return bool
     */
    private function palindrome(string $string): bool {
        $arr_palindrome = str_split($string);
        $palindrome = ($arr_palindrome == array_reverse($arr_palindrome)) ? TRUE: FALSE;

        return $palindrome;
    }
}