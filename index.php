<?php

//changes the color of the selected side menu item
if(isset($_GET['exercise']))
{
    $exercise = htmlentities(stripslashes($_GET['exercise']));
    //initializes the values
    $class1 = $class2 = $class3 = $class4 = $class5 = $class6 = $class7 = $class_home = "";
    switch ($exercise) {
        case '1':
            $class1 = "selected_item";
            break;
        case '2':
            $class2 = "selected_item";
            break;
        case '3':
            $class3 = "selected_item";
            break;
        case '4':
            $class4 = "selected_item";
            break;
        case '5':
            $class5 = "selected_item";
            break;
        case '6':
            $class6 = "selected_item";
            break;
        case '7':
            $class7 = "selected_item";
            break;
    }
}

if(isset($_GET['home']))
{
    $class_home = "selected_item";
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="styles.css" media="all">
    </head>
    <body>
        <div style="width:100%;text-align: center">
            <img src="gsoc.png" style="width: 72%;"/>
        </div>
        <div class="row">
            <div class="col" style="background-color: #EEAB4C;width: 20%;">
                <div style="text-align: center;color: white;box-sizing: border-box">
                    <ul>
                        <li><a href="?home"><button class="btn <?php echo $class_home ?>">Home</button></a></li>
                        <li><a href="?exercise=1"><button class="btn <?php echo $class1 ?>">Exercise One</button></a></li>
                        <li><a href="?exercise=2"><button class="btn <?php echo $class2 ?>">Exercise Two</button></a></li>
                        <li><a href="?exercise=3"><button class="btn <?php echo $class3 ?>">Exercise Three</button></a></li>
                        <li><a href="?exercise=4"><button class="btn <?php echo $class4 ?>">Exercise Four</button></a></li>
                        <li><a href="?exercise=5"><button class="btn <?php echo $class5 ?>">Exercise Five</button></a></li>
                        <li><a href="?exercise=6"><button class="btn <?php echo $class6 ?>">Exercise Six</button></a></li>
                        <li><a href="?exercise=7"><button class="btn <?php echo $class7 ?>">Exercise Seven</button></a></li>
                    </ul>
                </div>
            </div>
            <div class="col" style="width: 52%;background-color: white;">
                <div style="">
                        <?php
                        
                        //checks if any exercise button was clicked
                        if(isset($_GET['exercise']))
                        {
                            //gets and include the appropriate exercise file
                            $exercise = intval(htmlentities(stripslashes($_GET['exercise'])));
                            switch ($exercise)
                            {
                                case 1:
                                    require './exercise_1.php';
                                    break;
                                case 2:
                                    require './exercise_2.php';
                                    break;
                                case 3:
                                    require './exercise_3.php';
                                    break;
                                case 4:
                                    require './exercise_4.php';
                                    break;
                                case 5:
                                    require './exercise_5.php';
                                    break;
                                case 6:
                                    require './exercise_6.php';
                                    break;
                                case 7:
                                    require './exercise_7.php';
                                    break;
                                //includes the home page the wrong exercise number is supplied
                                default :
                                    require './home.php';
                                    break;
                            }
                        }
                        else{
                            require './home.php';
                        }
                        
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>
