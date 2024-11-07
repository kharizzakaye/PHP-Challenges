<!doctype html>
<html lang="en">
    <body>
        <main class="container">

            <p>Using a PHP POST method, ask the user to input 2 numbers</p>
            <ul>
                <li>Create a Grid using 2 inputs as the length and width.</li>
                <li>Insert random CONSONANT letters into the grid</li>
                <li>Display the grid in table</li>
            </ul>

            <section class="result">
                <form class="row g-2"  method="POST">
                    <div class="col-auto">
                        <label for="length" class="visually-hidden">Enter length</label>
                        <input type="number" class="form-control" id="length" name="length" placeholder="Enter length" required min="1">
                    </div>

                    <div class="col-auto">
                        <label for="width" class="visually-hidden">Enter width</label>
                        <input type="number" class="form-control" id="width" name="width" placeholder="Enter width" required min="1">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Create Grid</button>
                    </div>
                </form>
        
        
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") 
                    {
                        $lengthValue = $_POST['length'];
                        $widthValue = $_POST['width'];
                        
                        $consonants = 'bcdfghjklmnpqrstvwxyz';
                        
                        echo "<table cellpadding='10' cellspacing='0'>";
                            for ($i = 0; $i < $lengthValue; $i++) 
                            {
                                echo "<tr>";

                                for ($j = 0; $j < $widthValue; $j++) 
                                {
                                    $randomConsonant = $consonants[rand(0, strlen($consonants) - 1)];
                                    echo "<td class='table-border'>$randomConsonant</td>";
                                }

                                echo "</tr>";
                            }
                        echo "</table>";
                    }
                ?>
            </section>

        </main>
    </body>
</html>








