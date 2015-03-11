<?php

require_once './lib/time.php';

//current hour and minute
$current_hr = date('h');
$current_min = date('i');

$time = new Time($current_hr, $current_min);
$angle = $time->getAngle();

?>

<div style="color: #238BD2">
    <h2>Exercise 1</h2>
    <h4>Question: </h4>
    <p>Write a program that given the time of the day (hours, minutes) returns the angle between the hands on a clock. (outputs 0 because the hands are parallel.)</p>
</div>
<div style="color: #009900">
    <h3>Answer: </h3>
    <h4>Using the current time <?php echo $current_hr ." : " .$current_min; ?></h4>
    <h4>The angle between the hands is <?php echo $angle; ?></h4>
</div>
<div style="color: #ff0000">
    <br/>
    <h4>OR Use Custom Time</h4>
    <!--    Gets the custom time-->
    <form action="" method="POST">
        <select name="hr">
            <option value="0">Hour</option>
            <?php  
            //autogenerates the hour
            for($i = 0; $i < 24; $i++)
            {
                echo "<option value='$i'>$i</option>";
            }
            
            ?>
            
        </select>
        <select name="min">
            <option value="0">Minute</option>
            <?php 
            //auto generates the minutes
            for($i = 0; $i < 60; $i++)
            {
                echo "<option value='$i'>$i</option>";
            }
            
            ?>
            
        </select>
        <input type="submit" value="Calculate Angle">
    </form>
    
    <?php 
    
    //checks if the user uses a custom time
    if(isset($_POST['hr']))
    {
        $hr = htmlentities(stripslashes($_POST['hr']));
        $min = htmlentities(stripslashes($_POST['min']));
        $time = new Time($hr, $min);
        $angle = $time->getAngle();
        
    ?>
    <h3>Answer: </h3>
    <h4>Using the custom time <?php echo $hr ." : " .$min; ?></h4>
    <h4>The angle between the hands is <?php echo $angle; ?></h4>
    <?php } ?>
    
</div>