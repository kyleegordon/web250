<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$id = $user_data['id'];

//checks that account exists, then deletes it 
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
    $sql = "DELETE FROM users 
                WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $update_sucess = "Delete Successful";
        header("Location: ?p=home.php");
        die;
    } else {
        $update_sucess = "Delete Failed";
    }
} else {
    $update_sucess = "Account does not exist";
}