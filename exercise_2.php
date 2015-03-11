<?php

require_once './lib/string.php';

//checks if the user has submitted a string
if(isset($_POST['string']))
{
    $string = htmlentities(stripslashes($_POST['string']));
    $string_object = new StringClass($string);
    $reversed_string = $string_object->getReversedString();
}

?>

<div style="color: #238BD2">
    <h2>Exercise 2</h2>
    <h4>Question: </h4>
    <p>Write a program that reverses a string in place (UX Tip: if spaces are included, remove them)</p>
</div>

<div style="color: #ff0000">
    <br/>
    <h4>Please enter a string</h4>
    <form action="" method="POST">
        <input type="text" placeholder="string" name="string" class="input_text">
        <input type="submit" value="reverse">
    </form>
    
</div>

<div style="color: #009900">
    
    <?php
    //checks if the user has submitted a string
    
    if(isset($_POST['string']))
    {    
    ?>
        <h3>Answer: </h3>
        <h4>Actual String : <?php echo $string; ?></h4>
        <h4>Reversed String : <?php echo $reversed_string; ?></h4>
    
    <?php 
    } 
    ?>
        
</div>
