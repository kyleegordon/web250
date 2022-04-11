<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //assign form data to variables
    $username = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    //check if passwords match, check that user doesn't already exist, then create new account
    if ($password == $confirm_password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($con, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, password, first_name, last_name, address, city, state, zip)
					VALUES ('$username', '$password', '$first_name', '$last_name', '$address', '$city', '$state', '$zip')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                header("Location: ?p=login.php");
                die;
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
?>


<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Create Account</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <form id="register_form" action="" method="POST">
                        <table id="register_table" class="form_table">
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" id="email" name="email" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" id="password" name="password" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>
                                    <input type="password" id="confirm_password" name="confirm_password" required />
                                </td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>
                                    <input type="text" id="first_name" name="first_name" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>
                                    <input type="text" id="last_name" name="last_name" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <input type="text" id="address" name="address" required />
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <input type="text" id="city" name="city" required />
                                </td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>
                                    <input type="text" id="state" name="state" required />
                                </td>
                            </tr>
                            <tr>
                                <td>ZIP</td>
                                <td>
                                    <input type="text" id="zip" name="zip" required />
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <input type="submit" id="submit" name="submit" value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>