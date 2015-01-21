<?php
session_start();
if (!empty($_GET)){
    $_SESSION = $_GET;

}

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
$_SESSION["url"] = curPageURL();
?>
<html>
<head>
    <meta http-equiv="refresh" content="0; board.php">
</head>
</html>