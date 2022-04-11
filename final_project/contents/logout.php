<?php
session_start();
if (isset($_SESSION['id'])) {
    session_destroy();
}

header("Location: ?p=logout_success.php");
die;