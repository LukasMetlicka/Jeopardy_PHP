<?php
session_start();
$_GET = $_SESSION;
$answer = $_SESSION["answer"];
?>

<html>

    <head>
        <link href="style/AnswerSlate.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <h1><?php echo $_SESSION[$answer]?></h1>
        <form action="board.php" method="get">
            <input type="submit">
        </form>

    </body>

</html>