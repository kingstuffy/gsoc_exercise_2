<?php

//require_once '../lib/string.php';

class Word{
    protected $word;

    public function __construct($word) {
        $this->word = $word;
    }
    
    //gets the reversed word
    public function getReversedWord()
    {
        $word = $this->word;
        return $this->reverseWord($word);
    }
    
    //reverses each string of the given word
    private function reverseWord($word)
    {
        //splits the given word into an array by whitespace
        $word_array = explode(" ", $word);
        $new_array = array();
        
        //reverses each string of the given word
        foreach ($word_array as $value) {
            $string = new StringClass($value);
            $new_array[] = $string->getReversedString();
        }
        $reversed_word = implode(" ", $new_array);
        
        return $reversed_word;
    }
}