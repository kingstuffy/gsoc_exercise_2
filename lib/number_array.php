<?php

class NumberArray
{
    protected $number_array;
    protected $sorted_array;

    public function __construct($array_of_numbers) {
        $this->number_array = $array_of_numbers;
        //sorts the array of numbers
        $this->sortArray($array_of_numbers);
    }
    
    //gets the number at the particular rank of the sorted array
    public function getNumber($rank)
    {
        return $this->sorted_array[$rank];
    }
    
    //sorts a particular array by values
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
        $this->sorted_array = $array;
    }
}