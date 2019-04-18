<?php
header("Content-type: text/plain");

if (isset($_GET["name"]))
{
    echo "Hello, Dear ". $_GET["name"] . "!";
}
else
{
    echo "You have not entered your name.";
}