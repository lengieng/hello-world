<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["name"]))
                echo "Hi, " . $_GET["name"];
        }
        ?>
    </body>
</html>
