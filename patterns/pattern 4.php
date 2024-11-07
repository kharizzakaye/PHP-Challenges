
<!-- 

OUTPUT:

1 2 4 8 16
2 6 18 54 162
3 12 48 192 768
4 20 100 500 2500
5 30 180 1080 6480
6 42 294 2058 14406

-->

<?php
    function displayPattern($rows, $cols) 
    {
        for ($i = 1; $i <= $rows; $i++) 
        {
            for ($j = 1; $j <= $cols; $j++) 
            {
                if ($j == 1) 
                {
                    $value = $i;
                } 
                else 
                {
                    $value = $value * ($i + 1);
                }
                echo $value . "\t";
            }

            echo "<br>";
        }
    }

    $rows = 6; // number of rows
    $cols = 5; // number of columns
    
    displayPattern($rows, $cols);
?>