<?php
session_start();
if($_SESSION["userid"])
{
    session_unset();
    session_unset();
    session_destroy();
    header("location:LoginPG.php");
}
if(!$_SESSION["userid"])
header("location:LoginPG.php");
?>
