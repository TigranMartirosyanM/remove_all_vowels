<?php
    function remove_all_vowels($string) {
        return preg_replace("/[aeiou]/i", "", $string);
    }
    echo remove_all_vowels("We have so many apples in our garden");
?>