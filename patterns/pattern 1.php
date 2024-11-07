
<!-- OUTPUT:


                        *                        
                *              *                
        *                              *        
*                                              *
        *                               *
                *               *        
                        *                
                *               *        
        *                               *
*                                              *
        *                              *        
                *              *                
                        *   
                        
-->

<?php
    $multiple_spacing = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

    function displayCondition($row, $column, $multiple_spacing)
    {
        echo $multiple_spacing;

        if($row == $column)
        {
            echo "*";
        }
        else
        {
            echo "&nbsp;&nbsp;";
        }
    }

    // top part - triangle
    function generateTopPart($multiple_spacing)
    {
        for ($i=1; $i<=4; $i++)
        {
            for($j=4; $j>=1; $j--) // left side
            {
                displayCondition($i, $j, $multiple_spacing) ;
            }

            for($k=2; $k<=4; $k++) // right side
            {
                displayCondition($i, $k, $multiple_spacing) ;
            }

            echo "<br>";
        }
    }

    // middle part - X pattern
    function generateMiddlePart($multiple_spacing)
    {
        for ($i = 0; $i < 5; $i++) // generate rows
        {
            echo $multiple_spacing;

            for ($j = 0; $j < 5; $j++) 
            {
                echo $multiple_spacing . "&nbsp;";;
                if ($i == $j || $j == 5 - $i - 1) 
                {
                    echo "*";
                } 
                else 
                {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    }

    // bottom part - inverted triangle
    function generateBottomPart($multiple_spacing)
    {
        for($i=4; $i>=1; $i--)
        {
            for($j=4; $j>=1; $j--) // left side
            {
                displayCondition($i, $j, $multiple_spacing) ;
            }
                
            for($k=2; $k<=4; $k++) // right side
            {
                displayCondition($i, $k, $multiple_spacing) ;
            }

            echo "<br>";
        }
    }
    

    generateTopPart($multiple_spacing);
    generateMiddlePart($multiple_spacing);
    generateBottomPart($multiple_spacing);
?>