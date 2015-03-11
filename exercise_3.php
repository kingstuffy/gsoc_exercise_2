<?php

require_once './lib/string.php';
require_once './lib/word.php';

//checks if the user has submitted a word
if(isset($_POST['word']))
{
    $word = htmlentities(stripslashes($_POST['word']));
    $word_object = new Word($word);
    $reversed_word = $word_object->getReversedWord();
}

?>

<div style="color: #238BD2">
    <h2>Exercise 3</h2>
    <h4>Question: </h4>
    <p>Now write a routine that reverses each word in a string (words are characters separated by spaces)</p>
</div>

<div style="color: #ff0000">
    <h4>Please enter a word</h4>
    <form action="" method="POST">
        <input type="text" placeholder="word" name="word" class="input_text">
        <input type="submit" value="reverse">
    </form>
    
</div>

<div style="color: #009900">
    
    <?php
    //checks if the user has submitted a word
    
    if(isset($_POST['word']))
    {    
    ?>
        <h3>Answer: </h3>
        <h4>Actual Word : <?php echo $word; ?></h4>
        <h4>Reversed Word : <?php echo $reversed_word; ?></h4>
    
    <?php 
    } 
    ?>
        
</div>
