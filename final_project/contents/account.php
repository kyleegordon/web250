<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$id = $user_data['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //assign form data to variables
    $username = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE users 
                SET username='$username', first_name='$first_name', last_name='$last_name', address='$address', city='$city', state='$state', zip='$zip' 
                WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $update_sucess = "Update Successful";
        } else {
            $update_sucess = "Update Failed";
        }
    } else {
        $update_sucess = "Account does not exist";
    }
}
?>

<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Account Info</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <?php
                    global $update_sucess;
                    echo "$update_sucess";
                    ?>
                    <form id="account_form" action="" method="POST">
                        <table id="account_table" class="form_table">
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" id="email" name="email"
                                        value="<?php echo $user_data['username']; ?>" required />
                                </td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>
                                    <input type="text" id="first_name" name="first_name"
                                        value="<?php echo $user_data['first_name']; ?>" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>
                                    <input type="text" id="last_name" name="last_name"
                                        value="<?php echo $user_data['last_name']; ?>" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <input type="text" id="address" name="address"
                                        value="<?php echo $user_data['address']; ?>" required />
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <input type="text" id="city" name="city" value="<?php echo $user_data['city']; ?>"
                                        required />
                                </td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>
                                    <input type="text" id="state" name="state"
                                        value="<?php echo $user_data['state']; ?>" required />
                                </td>
                            </tr>
                            <tr>
                                <td>ZIP</td>
                                <td>
                                    <input type="text" id="zip" name="zip" value="<?php echo $user_data['zip']; ?>"
                                        required />
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <input type="submit" id="update" name="update" value="Update" />
                                    <input type="button" id="delete" name="delete" value="Delete Account" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <a href="?p=logout.php">Logout</a>
                </div>
            </div>
        </main>
    </div>
</div>