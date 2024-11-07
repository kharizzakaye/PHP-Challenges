<!-- 
 
OUTPUT:
            
1
2 4
3 6 9
4 8 12 16
5 10 15 20 25
4 8 12 16
3 6 9
2 4
1

-->

<?php
    function displayPattern($count) 
    {
        // Loop to generate the ascending part of the pattern
        for ($i = 1; $i <= $count; $i++) 
        {
            for ($j = 1; $j <= $i; $j++) 
            {
                echo $j * $i . " ";
            }

            echo "<br>";
        }

        // Loop to generate the descending part of the pattern
        for ($i = $count - 1; $i >= 1; $i--) 
        {
            for ($j = 1; $j <= $i; $j++)
            {
                echo $j * $i . " ";
            }

            echo "<br>";
        }
    }

    displayPattern(5);
?>