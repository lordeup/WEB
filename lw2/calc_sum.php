<?php
header("Content-type: text/plain");

if (isset($_GET["arg1"]) && isset($_GET["arg2"]))
{
    echo ($_GET["arg1"] + $_GET["arg2"]);
}
else
{
    echo "You did not enter numbers to add.";
}