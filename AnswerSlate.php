<?php
session_start();
$_GET = $_SESSION;
?>

<html>

    <head>
        <link href="style/AnswerSlate.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <h1><?php echo $_SESSION[$_SESSION["answer"]]?></h1>
        <form action="board.php" method="post">
            <input type="submit" name="submit" value="Back to the Board!">
        </form>

    </body>

    <style>
        body{
            background-color: <?php echo $_SESSION["color"] ?>;
        }
    </style>
</html>