<?php

require_once './lib/prime.php';

$default_from = 1;
$default_to = 500;
//gets the type of prime number generator to be used
$recursive_prime_number_generator = new RecursivePrimeNumberGenerator();

$prime_numbers_obj = new PrimeNumbers($recursive_prime_number_generator, $default_from, $default_to);
$prime_numbers = $prime_numbers_obj->getPrimeNumbers();

?>

<div style="color: #238BD2">
    <h2>Exercise 6</h2>
    <h4>Question: </h4>
    <p>Write a program that will display all prime numbers from 1 - 500. (bonus: make the range customizable)</p>
</div>
<div style="color: #009900;">
    <h3>Answer: </h3>
    <h4>Using the default range 1 - 500  (Recursive)</h4>
    <h4>The prime numbers are  <?php echo $prime_numbers; ?></h4>
</div>
<div style="color: #ff0000">
    <br/>
    <h4>OR Use Custom Range</h4>
    <form action="" method="POST">
        <input type="text" name="from" placeholder="from" class="input_text" value="">
        <input type="text" name="to" placeholder="to" class="input_text">
        <input type="submit" value="Get Prime Numbers">
    </form>
    
    <?php 
    
    //checks if the user uses a custom range
    if(isset($_POST['to']))
    {
        $from = intval(htmlentities($_POST['from']));
        $to = intval(htmlentities($_POST['to']));
        
        //ensures that the range is valid
        if($from > $to)
        {
            $temp = $from;
            $to = $from;
            $from = $temp;
        }
        
        $recursive_prime_number_generator2 = new RecursivePrimeNumberGenerator();
        $prime_numbers_obj = new PrimeNumbers($recursive_prime_number_generator2, $from, $to);
        $prime_numbers = $prime_numbers_obj->getPrimeNumbers();
        
    ?>
    <h3>Answer: </h3>
    <h4>Using the custom range <?php echo $from ." - " .$to; ?></h4>
    <h4>The prime numbers are  <?php echo $prime_numbers; ?></h4>
    <?php } ?>
    
</div>