<?php
session_start();
if (isset($_SESSION['id'])) {
    session_destroy();
}

$alert = "You Have Been Sucessfully Logged Out";
header("Location: ?p=home.php&alert=$alert");
die;