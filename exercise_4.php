<?php

require_once './lib/string.php';

//checks if the user has submitted a string
if(isset($_POST['string']))
{
    $string = htmlentities(stripslashes($_POST['string']));
    $order =  htmlentities(stripslashes($_POST['order']));
    $string_object = new StringClass($string);
    $sorted_string = $string_object->getSortedString($order);    
}

?>

<div style="color: #238BD2">
    <h2>Exercise 3</h2>
    <h4>Question: </h4>
    <p>Write a program that will sort characters in a string in ascending or descending order. (UX Tip: if spaces are included, removethem)</p>
</div>

<div style="color: #ff0000">
    <h4>Please enter a string</h4>
    <form action="" method="POST">
        <input type="text" placeholder="string" name="string" class="input_text">
        <select name="order">
            <option value="asc">Order</option>
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
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
        <h4>Actual Word : <?php echo $string; ?></h4>
        <h4>Reversed Word : <?php echo $sorted_string; ?></h4>
    
    <?php 
    } 
    ?>
        
</div>
