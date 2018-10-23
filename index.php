<?php  
    date_default_timezone_set('America/Los_Angeles');
?>





<!doctype html>
<html>
    <head>
        <title>First Web Page Using VS Code</title>
        <link href ="style.css" rel ="stylesheet"/>
    </head>

    <body>
        <header>
                <h1>Things to do</h1>
    
        </header>
        <br>
        <img src= "images/Aaron-Rodgers-2.png"/>
        <br>
      
        <p1>Lorem ipsum, dolor sit amet consectetur adipisicing el </p1>
        <ol>
            <li>Grocery</li>
            <li>Laundry</li>
        </ol>


        <?php
        echo "<form>
            <input type ='hidden' name = 'uid' value ='Anonymous'>
            <input type ='hidden' name = 'date' value =' ".date('Y-m-d H:i:s'). " '>
            <textarea name="message"></textarea> <break>
            <button type ='submit'  name = 'submit' > Comment   </button>
        </form>"
        ?>

        <aside>
            <h2> How to Get here</h2>
            <ol id="orderedlist">
                    <li>By Plan</li>
                    <li>By Train</li>
                    <li>By Boat</li>
            </ol>
        </aside>

          


    </body>



</html>

