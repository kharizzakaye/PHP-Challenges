
<!-- OUTPUT:

    *                                       *    
        5                               5  
            *                       *    
                3               3      
                    *       *        
                        1          
                    *       *        
                3               3      
            *                       *    
        5                               5  
    *                                       *

-->

<?php
    function displayCondition($row, $column)
    {
        if ($row == $column)
        {
            if ($column % 2 == 0) // print star if even number
            {
                echo "*";
            }
            else // print the value if odd number
            {
                echo $column;
            }
        }
        else
        {
            echo "&nbsp;&nbsp;";
        }
    }

    // Upper Half Part
    function upperHalfPart()
    {
        for ($i=6; $i>=1; $i--) // iterates from 6 down to 1, controls the rows of the pattern
        {
            for ($j=6; $j>=1; $j--) // iterates from 6 to 1 for each row, controls the left half of the pattern
            {
                displayCondition($i, $j);
            }

            for ($k=2; $k<=6; $k++) // controls the right side of the pattern
            {
                displayCondition($i, $k);
            }
            echo "<br>";
        }
    }
    
        
    // Lower Half Part
    function lowerHalfPart()
    {
        for($i=2; $i<=6; $i++)
        {
            for($j=6; $j>=1; $j--) // the loop that displays the left side
            {
                displayCondition($i, $j);
            }

            for($k=1; $k<=6; $k++) // the loop that displays the right side
            {
                displayCondition($i, $k);
            }

            echo "<br>";
        }
    }
    

    upperHalfPart();
    lowerHalfPart();
?>
        
