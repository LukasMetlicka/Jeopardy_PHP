<!--
http://localhost:63343/Jeopardy_PHP/board.php?q1%3A1=GQ1&a1%3A1=GA1&q1%3A2=GQ2&a1%3A2=GA2&q1%3A3=GQ3&a1%3A3=GA3&q1%3A4=GQ4&a1%3A4=GA4&q1%3A5=GQ5&a1%3A5=GA5&q2%3A1=OQ1&a2%3A1=OA1&q2%3A2=OQ2&a2%3A2=OA2&q2%3A3=OQ3&a2%3A3=OA3&q2%3A4=OQ4&a2%3A4=OA4&q2%3A5=OQ5&a2%3A5=OA5&q3%3A1=BQ1&a3%3A1=BA1&q3%3A2=BQ2&a3%3A2=BA2&q3%3A3=BQ3&a3%3A3=BA3&q3%3A4=BQ4&a3%3A4=BA4&q3%3A5=BQ5&a3%3A5=BA5&q4%3A1=YQ1&a4%3A1=YA1&q4%3A2=YQ2&a4%3A2=YA2&q4%3A3=YQ3&a4%3A3=YA3&q4%3A4=YQ4&a4%3A4=YA4&q4%3A5=YQ5&a4%3A5=YA5&q5%3A1=RQ1&a5%3A1=RA1&q5%3A2=RQ2&a5%3A2=RA2&q5%3A3=RQ3&a5%3A3=RA3&q5%3A4=RQ4&a5%3A4=RA4&q5%3A5=RQ5&a5%3A5=RA4&submit=Generate+Jeopardy+Game%21
-->
<html>

    <head>
        <link href="style/Slate.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <a href="AnswerSlate.php">
            <h1><?php
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

                $_SESSION["question"] = $question;
                $_SESSION["answer"] = $answer;
                $_SESSION["color"] = $color;
                echo $_SESSION[$question];
                ?></h1>
        </a>



    </body>

    <style>

        body {
           background-color: <?php echo $_SESSION["color"] ?>;
        }
        h1 {
            text-align: center;
        }

    </style>

</html>