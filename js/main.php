<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
if(isset($_COOKIE['имя куки'])){
    $_SESSION["theme"] = $_COOKIE['имя куки'];
  }
?>
