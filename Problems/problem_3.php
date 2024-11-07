      
<!doctype html>
<html lang="en">
    <body>

        <main class="container">

            <p>Create a stack of integers using arrays( First in last out )</p>
            <ul>
                <li>Create input fields and push a button to insert a new value</li>
                <li>Create a pop button to remove the top value</li>
                <li>Always display the existing stack content</li>
                <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
            </ul>

            <section class="result">
                <form class="row g-2" method="POST">
                    <div class="col-auto">
                        <label for="value" class="visually-hidden">Enter a value</label>
                        <input type="number" class="form-control" id="value" name="value" placeholder="Enter a value">
                    </div>

                    <div class="col-auto">
                        <button type="submit" name="push" class="btn btn-primary mb-3">Push</button>
                    </div>

                    <div class="col-auto">
                        <button type="submit" name="pop" class="btn btn-danger mb-3">Pop</button>
                    </div>
                </form>


                <p class="content-title">Stack Content:</p>

                <ul>
                    <?php
                        session_start();

                        // Initialize the stack if it doesn't exist
                        if (!isset($_SESSION['stack'])) 
                        {
                            $_SESSION['stack'] = [];
                        }

                        // Push
                        if (isset($_POST['push']) && !empty($_POST['value']))
                        {
                            $value = $_POST['value'];
                            $_SESSION['stack'][] = $value;
                        }

                        // Pop
                        if (isset($_POST['pop']))
                        {
                            $tempStack = [];
                            $stackSize = count($_SESSION['stack']);
                            
                            for ($i = 0; $i < $stackSize - 1; $i++) 
                            {
                                $tempStack[] = $_SESSION['stack'][$i];
                            }
                            $_SESSION['stack'] = $tempStack;
                        }

                        // Display stack content
                        foreach (array_reverse($_SESSION['stack']) as $value) 
                        {
                            echo "<li>$value</li>";
                        }
                    ?>
                </ul>
            </section>

        </main>
    </body>
</html>