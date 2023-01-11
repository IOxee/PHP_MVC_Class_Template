<?php
    defined('MVC_APP') or die('Permission denied');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>

        <link rel="stylesheet" type="text/css" href="app/views/css/style.css">
    </head>
    <body>
        <h1>User List</h1>
        <div class="myStyle">
            <ul>
                <?php
                    foreach ($info_guests as $row) {
                        // print_r($row);
                        // echo "<hr>";
                        echo "<li>" . $row['firstname'] . " " . $row['lastname'] . "</li>";
                    }
                ?>
            </ul>
        </div>
    </body>
</html>