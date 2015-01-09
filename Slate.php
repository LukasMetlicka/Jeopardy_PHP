<?php
session_start();
$_SESSION["color&value"] = $_POST["button"];

switch (substr($_SESSION["color&value"], 0, 1)){

    case "G":
        $question = "q1:";
        $answer = "a1:";
        $color = "#2ecc71";
        break;
    case "O":
        $question = "q2:";
        $answer = "a2:";
        $color = "#e67e22";
        break;
    case "B":
        $question = "q3:";
        $answer = "a3:";
        $color = "#2980b9";
        break;
    case "Y":
        $question = "q4:";
        $answer = "a4:";
        $color = "#f1c40f";
        break;
    case "R":
        $question = "q5:";
        $answer = "a5:";
        $color = "#e74c3c";
        break;

}

switch (substr($_SESSION["color&value"],1)){

    case "100":
        $question .= "1";
        $answer .= "1";
        break;
    case "200":
        $question .= "2";
        $answer .= "2";
        break;
    case "300":
        $question .= "3";
        $answer .= "3";
        break;
    case "400":
        $question .= "4";
        $answer .= "4";
        break;
    case "500":
        $question .= "5";
        $answer .= "5";
        break;

}

$question = $_SESSION["question"];
$answer = $_SESSION["answer"];
?>

<html>

    <head>
        <link href="style/Slate.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <h1><?php echo $_SESSION[$question]; ?></h1>
    <?php var_dump($_SESSION); ?>

    </body>

    <style>
        /*
        body {
           background-color: <?php echo $color ?>%;
        }
        h1 {
            text-align: center;
        }
        */
    </style>

</html>