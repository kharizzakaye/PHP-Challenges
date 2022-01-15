 <?php
    $username = "";
    $password = "";
    $gender = "";
    $color = "";
    $languages = [];
    $comments = "";
    $terms = "";

    if(isset($_POST["submit"]))
    {
        $ok = true;

        if(!isset($_POST["username"]) || $_POST["username"] === "" )
        {
            $ok = false;
        }
        else
        {
            $username = $_POST["username"];
        };

        if(!isset($_POST["password"]) || $_POST["password"] === "")
        {
            $ok = false;
        }
        else
        {
            $password = $_POST["password"];
        };

        if(!isset($_POST["gender"]) || $_POST["gender"] === "")
        {
            $ok = false;
        }
        else
        {
            $gender = $_POST["gender"];
        };

        if(!isset($_POST["color"]) || $_POST["color"] === "")
        {
            $ok = false;
        }
        else
        {
            $color = $_POST["color"];
        };

        if(!isset($_POST["languages"]) || !is_array($_POST["languages"]) || count($_POST["languages"]) === 0)
        {
            $ok = false;
        }
        else
        {
            $languages = $_POST["languages"];
        };

        if(!isset($_POST["comments"]) || $_POST["comments"] === "")
        {
            $ok = false;
        }
        else
        {
            $comments = $_POST["comments"];
        };

        if(!isset($_POST["terms"]) || $_POST["terms"] === "")
        {
            $ok = false;
        }
        else
        {
            $terms = $_POST["terms"];
        };

        if($ok)
        {
            printf('
                Username: %s <br>
                Password: %s <br>
                Gender: %s <br>
                Color: %s <br>
                Language(s): %s <br>
                Comments: %s <br>
                Terms: %s <br>' ,

                htmlspecialchars($username, ENT_QUOTES),
                htmlspecialchars($password, ENT_QUOTES),
                htmlspecialchars($gender, ENT_QUOTES),
                htmlspecialchars($color, ENT_QUOTES),
                htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
                htmlspecialchars($comments, ENT_QUOTES),
                htmlspecialchars($terms, ENT_QUOTES),
            );
        }
    }
?>

<form action="" method="POST">
    <label for="username">Username: </label>
    <input type="text" name="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES); ?>">
    <br>

    <label for="password">Password: </label>
    <input type="password" name="password">
    <br>

    <label for="gender">Gender: </label>
        <input type="radio" name="gender" id="gender_male" value="male"
            <?php
                if($gender === "male")
                {
                    echo "checked";
                }
            ?>
        >
        <label for="gender_male">Male</label>

        <input type="radio" name="gender" id="gender_female" value="female"
            <?php
                if($gender === "female")
                {
                    echo "checked";
                }
            ?>
        >
        <label for="gender_female">Female</label>

        <input type="radio" name="gender" id="gender_other" value="other"
            <?php
                if($gender === "other")
                {
                    echo "checked";
                }
            ?>
        >
        <label for="gender_other">Other</label>
        <br>

    <label for="color">Favorite Color: </label>
    <select name="color">
        <option value="red" <?php if($color === "red"){ echo "selected"; } ?> >Red</option>
        <option value="yellow" <?php if($color === "yellow"){ echo "selected"; } ?> >Yellow</option>
        <option value="blue" <?php if($color === "blue"){ echo "selected"; } ?> >Blue</option>
    </select> 
    <br>

    <label for="languages[]">Languages:</label>
    <select name="languages[]" size="3" multiple>
        <option value="en" <?php if(in_array("en", $languages)) { echo "selected"; } ?> >English</option>
        <option value="fr" <?php if(in_array("fr", $languages)) { echo "selected"; } ?> >French</option>
        <option value="it" <?php if(in_array("it", $languages)) { echo "selected"; } ?> >Italian</option>
    </select> 
    <br>

    <label for="comments">Comments: </label>
    <textarea name="comments" cols="30" rows="3"><?php echo htmlspecialchars($comments, ENT_QUOTES); ?></textarea>
    <br>

    <input type="checkbox" name="terms" value="yes"
        <?php 
            if($terms === "yes")
            {
                echo "checked";
            }
        ?> 
    >
    <label for="terms">I accept the Terms &amp; Conditions</label>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>