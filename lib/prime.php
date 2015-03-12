<?php

//the interface for prime number generators
interface PrimeNumberGenerator
{
    public function generatePrimeNumber($from, $to);
}

class PrimeNumbers
{
    protected $from;
    protected $to;
    protected $generator;

    public function __construct(PrimeNumberGenerator $generator, $from, $to) {
        $this->from = $from;
        $this->to = $to;
        $this->generator = $generator;
    }
    
    //uses the prime number generator to get the prime numbers
    public function getPrimeNumbers()
    {
        return $this->generator->generatePrimeNumber($this->from, $this->to);
    }
}

//generates prime numbers iteratively
class IterativePrimeNumberGenerator implements PrimeNumberGenerator{
    
    //generates the prime number
    public function generatePrimeNumber($from, $to) {
        $current_index = ($from < 2) ? 2 : $from;
        $prime_numbers = array();
        
        //loops through all the numbers within the given range
        while($current_index <= $to)
        {
            //adds the number to the prime no collection if it's a prime number
            if($this->checkIfPrimeNumber($current_index))
            {
                $prime_numbers[] = $current_index;
            }
            $current_index ++;
        }
        
        //returns the prime numbers separated by commas
        return implode(", ", $prime_numbers);
    }
    
    //check if a number is a prime number
    private function checkIfPrimeNumber($number)
    {
        $check = true;
        for($i = 2; $i < $number; $i++)
        {
            if(($number % $i) === 0)
            {
                $check = false;
                break;
            }
        }
        
        return $check;
    }

}

//generates the prime numbers recursively
class RecursivePrimeNumberGenerator implements PrimeNumberGenerator{
    protected $prime_numbers;

    public function __construct() {
        $this->prime_numbers = array();
    }
    
    //generates the prime number within the specified range
    public function generatePrimeNumber($from, $to) {
        
        //limits the number of recursions to 50 due to the limits of wammp server 
        for($index = $from; $index < $to; $index += 50)
        {
            //sets the number of recursions to the maximum if the no of possible recursions is less thsn 50
            $final = (($to - $index) < 50) ? ($to-$index+1) : 50;
            $this->createPrimeNumber($index, $index + $final - 1);
        }
        return implode(", ", $this->prime_numbers);
    }
    
    //recursive function that creates the prime numbers
    private function createPrimeNumber($from, $to) {
        $from = ($from < 2) ? 2 : $from;
        $current_index = $from;
        
        //generates the prime number within the specified range
        if($this->checkIfPrimeNumber($current_index))
        {
            $this->prime_numbers[] = $current_index;
        }
        $current_index ++;
        
        //the function calls itself as long as the range is valid
        if($current_index <= $to)
        {
            //sets a new range
            $this->createPrimeNumber($current_index, $to);
        }
        
    }
    
    //check if the given number is a prime number
    private function checkIfPrimeNumber($number)
    {
        $check = true;
        for($i = 2; $i < $number; $i++)
        {
            if(($number % $i) === 0)
            {
                $check = false;
                break;
            }
        }
        
        return $check;
    }

}