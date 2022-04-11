<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Login Success</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <p>Hello, <?php echo $user_data['username'] ?>. You have been successfully logged in</p>
                    <a href="?p=logout.php">Logout</a>
                </div>
            </div>
        </main>
    </div>
</div>