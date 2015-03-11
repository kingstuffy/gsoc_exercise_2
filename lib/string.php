<?php

class StringClass
{   
    protected $string;

    public function __construct($string) {
        $this->string = strval($string);
    }
    
    //gets the reversed string
    public function getReversedString()
    {
        $string  = $this->string;
        $new_string = $this->removeWhiteSpace($string);
        return $this->reverseString($new_string);
    }
    
    
    //reverses the given string
    private function reverseString($string)
    {
        $string_array = str_split($string);
        $string_length = count($string_array);
        $new_string_array = array();
        
        for($i = $string_length - 1; $i >= 0; $i--)
        {
            $new_string_array[] = $string_array[$i];
        }
        
        $reversed_string = implode("", $new_string_array);
        return $reversed_string;
    }
    
    //removes whitespace from the string
    private function removeWhiteSpace($string)
    {
        $string_array = explode(" ", $string);
        $new_string = implode("", $string_array);
        return $new_string;
    }
    
    //gets the sorted string sorted by the given order
    public function getSortedString($order)
    {
        $string  = $this->string;
        //removes whitespace from the string and sort the string
        $new_string = $this->removeWhiteSpace($string);
        $sorted_string_array = $this->sortString($new_string);
        $sorted_string = implode("", $sorted_string_array);
        
        //reverses the string if the order is descending
        if($order == "desc")
        {
            $sorted_string = $this->reverseString($sorted_string);
        }
        
        return $sorted_string;
    }
    
    //sorts the given string
    private function sortString($string)
    {
        $string_array = str_split($string);
        $new_ascii_array = array();
        $sorted_string_array = array();
        
        //fetches the ascii value of each string character and pushes them into and empty array
        foreach ($string_array as $value) {
            $new_ascii_array[] = ord($value);
        }
        
        //sorts the ascii array
        $sorted_ascii_array = $this->sortArray($new_ascii_array);
        
        //converts the ascii values of each characters and pushes them into a new string array
        foreach ($sorted_ascii_array as $value)
        {
            $sorted_string_array[] = chr($value);
        }
        
        return $sorted_string_array;
    }
    
    //sorts the given array
    private function sortArray($array)
    {
        $array_length = count($array);
        $iteration = $array_length;
        
        while($iteration > 1)
        {
            for($i = 0; $i < $iteration - 1; $i++)
            {
                if($array[$i] > $array[($i + 1)])
                {
                    $temp = $array[$i];
                    $array[$i] = $array[($i + 1)];
                    $array[($i + 1)] = $temp;
                }
            }
            $iteration--;
        }
        return $array;
    }
    
}
