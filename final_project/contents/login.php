<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {

        //read from database
        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

        $result = mysqli_query($con, $query);

        //checks if user exists and password matches
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['id'] = $user_data['id'];
                $invalid = "";
                header("Location: ?p=account.php");
                die;
            } else {
                $invalid = "<p>Invalid login credentials</p>";
            }
        }
    }
}
?>

<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Login</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <?php
                    global $invalid;
                    echo "$invalid";
                    ?>
                    <form id="post_form" action="" method="POST">
                        <table id="login_table" class="form_table">
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" id="username" name="username" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" id="password" name="password" required />
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