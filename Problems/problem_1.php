<!doctype html>
<html lang="en">
    <body>
        <main>

            <p>Generate a random character from a-k</p>
            <ul>
                <li>Create a 4 x 5 table</li>
                <li>Display all the random characters inside the table</li>
                <li>Highlight all the character that belongs to the even column</li>
            </ul>

            <!-- Code block to display the Odd / even column -->
            <p>Odd / Even Column:</p>
            <?php
                $oddEvenArray = range('a', 'k');

                function oddEvenColumnDisplay($oddEvenArray)
                {
                    // Display the array values and indices in a table
                    echo "<table cellpadding='10' cellspacing='0' class='table-border'>";
    
                        echo "<tr>";
                            foreach ($oddEvenArray as $index => $value) 
                            {
                                echo "<td class='table-border'>$value</td>";
                            }
                        echo "</tr>";
    
    
                        echo "<tr>";
                            foreach ($oddEvenArray as $index => $value) 
                            {
                                echo "<td class='table-border'>$index</td>";
                            }
                        echo "</tr>";
    
                    echo "</table>";
                }
                
                oddEvenColumnDisplay($oddEvenArray);
            ?>

            <section class="result">
                <p>Result:</p>
        
                <?php
                    function generateRandomCharacter() 
                    {
                        $characters = range('a', 'k');
                        return $characters[array_rand($characters)];
                    }
                    echo "<table class='table-border' cellspacing='0' cellpadding='10'>";
                    
                    for ($row = 1; $row <= 4; $row++) 
                    {
                        echo "<tr>";
                            for ($col = 1; $col <= 5; $col++) 
                            {
                                $char = generateRandomCharacter();

                                if (array_search($char, $oddEvenArray) % 2 == 0) // check if character belongs to the even column
                                {
                                    $char = strtoupper($char); // convert to uppercase
                                    echo "<td class='table-cell-background table-border'>$char</td>";
                                } 
                                else 
                                {
                                    echo "<td class='table-border'>$char</td>";
                                }
                            }
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                ?>
            </section>
        </main>
    </body>
</html>