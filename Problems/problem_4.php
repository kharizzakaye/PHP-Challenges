
<!doctype html>
<html lang="en">
    <body>
        <main class="container">

            <p>Create a queue of integers using arrays (first in first out)</p>
            <ul>
                <li>Create input fields and push a button to insert a new value</li>
                <li>Create a pop button to remove the old value</li>
                <li>Always display the existing queue content</li>
                <li>Do not use pre-defined PHP array function like <strong>array_pop</strong></li>
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

                <p class="content-title">Queue Content:</p>

                <ul>
                    <?php
                        session_start();

                        // Initialize the queue if it doesn't exist
                        if (!isset($_SESSION['queue'])) 
                        {
                            $_SESSION['queue'] = [];
                        }

                        // push
                        if (isset($_POST['push']) && !empty($_POST['value'])) 
                        {
                            $value = $_POST['value'];
                            $_SESSION['queue'][] = $value;
                        }

                        // pop
                        if (isset($_POST['pop'])) 
                        {
                            $queueSize = count($_SESSION['queue']);
                            $tempQueue = [];
                            for ($i = 1; $i < $queueSize; $i++) 
                            {
                                $tempQueue[] = $_SESSION['queue'][$i];
                            }
                            $_SESSION['queue'] = $tempQueue;
                        }

                        // Display queue content
                        foreach ($_SESSION['queue'] as $value) 
                        {
                            echo "<li>$value</li>";
                        }
                    ?>
                </ul>
            </section>
        </main>
    </body>
</html>


