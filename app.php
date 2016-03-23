<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["name"]))
                echo "Hi, " . $_GET["name"];
        } else {
            // Handle POST request here
            if (isset($_POST["name"]))
                echo "Hi, " . $_POST["name"];
        }
        ?>
    </body>
</html>
