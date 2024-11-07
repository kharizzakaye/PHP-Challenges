<!doctype html>
<html lang="en">
    <body>
        <main>

            <p>Manipulation of multi-dimensional array</p>
            <ul>
                <li>Create a 4x4 table</li>
                <li>Generate a random number from 1 - 100</li>
                <li>The number generated should always be unique</li>
                <li>Sum up the number per column and row</li>
            </ul>

            <section class="result">
                <?php
                    function generateUniqueRandomNumbers($min, $max, $count) 
                    {
                        $numbers = range($min, $max);
                        shuffle($numbers);
                        return array_slice($numbers, 0, $count);
                    }

                    $rows = 4;
                    $cols = 4;
                    $numberOfCells = $rows * $cols;
                    $randomNumbers = generateUniqueRandomNumbers(1, 100, $numberOfCells);

                    // Convert the flat array into a multidimensional array
                    $table = array_chunk($randomNumbers, $cols);

                    // Print the table and calculate sums
                    echo "<table cellpadding='10' cellspacing='0'>";
                        $rowSums = array_fill(0, $rows, 0);
                        $colSums = array_fill(0, $cols, 0);

                        for ($i = 0; $i < $rows; $i++) 
                        {
                            echo "<tr>";
                                for ($j = 0; $j < $cols; $j++) 
                                {
                                    $num = $table[$i][$j];
                                    echo "<td class='table-border'>$num</td>";
                                    $rowSums[$i] += $num;
                                    $colSums[$j] += $num;
                                }
                                echo "<td><strong>" . $rowSums[$i] . "</strong></td>"; // Row sum
                            echo "</tr>";
                        }

                        echo "<tr>";
                            for ($j = 0; $j < $cols; $j++) 
                            {
                                echo "<td><strong>" . $colSums[$j] . "</strong></td>"; // Column sum
                            }
                            echo "<td></td>"; // Placeholder for bottom-right cell
                        echo "</tr>";

                    echo "</table>";
                ?>
            </section>

        </main>
    </body>
</html>