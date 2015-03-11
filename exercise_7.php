<?php

require_once './lib/number_array.php';

$random_gen_nos = "";

//generates random numbers seperated by commas
for($i = 0; $i < 10; $i++)
{
    $random_gen_nos .= rand(0, 1000) .",";
}
$random_gen_nos = substr($random_gen_nos, 0, strlen($random_gen_nos) - 1);
//converts the csv into an array
$array_of_numbers = explode(",", $random_gen_nos);

$number_array = new NumberArray($array_of_numbers);

$second_lowest_number = $number_array->getNumber(1);
$second_greatest_number = $number_array->getNumber(count($array_of_numbers) - 2);


?>

<div style="color: #238BD2">
    <h2>Exercise 7</h2>
    <h4>Question: </h4>
    <p>Write a program that will determine the second lowest and greatest numbers in an array.</p>
</div>
<div style="color: #009900;">
    <h3>Answer: </h3>
    <h4>Using random generated numbers <?php echo $random_gen_nos ?></h4>
    <h4>The second lowest number is  <?php echo $second_lowest_number; ?></h4>
    <h4>The second greatest number is  <?php echo $second_greatest_number; ?></h4>
</div>
<div style="color: #ff0000">
    <br/>
    <h4>OR Use Custom Numbers separated by commas</h4>
    <form action="" method="POST">
        <input type="text" name="numbers" placeholder="numbers separated by commas" class="input_text" value="">
        <input type="submit" value="Submit">
    </form>
    
    <?php 
    
    //checks if the users enters custom numbers
    if(isset($_POST['numbers']))
    {
        $numbers = htmlentities(stripslashes($_POST['numbers']));
        $array_of_numbers = explode(",", $numbers);

        $number_array = new NumberArray($array_of_numbers);

        $second_lowest_number = $number_array->getNumber(1);
        $second_greatest_number = $number_array->getNumber(count($array_of_numbers) - 2);
        
    ?>
    <h3>Answer: </h3>
    <h4>Using custom numbers <?php echo $numbers ?></h4>
    <h4>The second lowest number is  <?php echo $second_lowest_number; ?></h4>
    <h4>The second greatest number is  <?php echo $second_greatest_number; ?></h4>
    <?php } ?>
    
</div>