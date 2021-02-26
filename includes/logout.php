<?php

session_start();
session_unset(); //Like doing $_SESSION = array();
session_destroy(); //Removes all files from the temp directory (clears cache)
header("Location:../index.php");
exit();