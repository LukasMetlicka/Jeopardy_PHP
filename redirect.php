<?php
session_start();
if (!empty($_GET)){
    $_SESSION = $_GET;

}

?>
<html>
<head>
    <meta http-equiv="refresh" content="0; board.php">
</head>
</html>