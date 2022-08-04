<?php
// Start the session
session_start();
//create
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
//get
$name = $_SESSION['favanimal'];
echo $name;

//modify
$_SESSION["favanimal"] = "Horse";
echo "Session variables are set.";

//get
$name = $_SESSION['favanimal'];
echo $name;

//delete
//unset($_SESSION["favanimal"]);

//get
$name = $_SESSION['favanimal'];
echo "$name <br>";
$id = session_id();$_GET['variable'];
echo $id;

?>
