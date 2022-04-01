<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Module 6 Forms</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">

                    <h4 style="text-align: center;">First Form </h4>
                    <form id="post_form" action="" method="POST">
                        <table id="post_table">
                            <tr>
                                <td>First Name</td>
                                <td>
                                    <input type="text" id="first_name" name="first_name_post" />
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>
                                    <input type="text" id="last_name" name="last_name_post" />
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <input type="submit" id="submit" name="submit_post_names" value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if (isset($_POST["submit_post_names"])) {
                        echo "<p>Your first name is {$_POST["first_name_post"]}.</p>
                              <p>Your last name is {$_POST["last_name_post"]}.</p>";
                    }
                    ?>
                    <hr />
                    <h4 style="text-align: center;">Branded GET Form </h4>
                    <form id="get_form" action="" method="GET">
                        <table id="get_table">
                            <tr>
                                <td>Pet's Name</td>
                                <td>
                                    <input type="text" id="pet_name" name="pet_name_get" />
                                </td>
                            </tr>
                            <tr>
                                <td>Pet's Breed</td>
                                <td>
                                    <input type="text" id="pet_breed" name="pet_breed_get" />
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <!-- This hidden input allows the dynamically loaded html content 
                                    to be passed in the url along with the form data-->
                                    <input type="hidden" name="p" value="m6forms.php" />
                                    <input type="submit" id="submit" name="submit_get" value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if (isset($_GET["submit_get"])) {
                        echo "<p>Your pet's name is {$_GET["pet_name_get"]}.</p>
                              <p>Your pet's breed is {$_GET["pet_breed_get"]}.</p>";
                    }
                    ?>
                    <hr />
                    <h4 style="text-align: center;">Branded POST Form </h4>
                    <form id="post_form" action="" method="POST">
                        <table id="post_table">
                            <tr>
                                <td>Pet's Name</td>
                                <td>
                                    <input type="text" id="pet_name" name="pet_name_post" />
                                </td>
                            </tr>
                            <tr>
                                <td>Pet's Breed</td>
                                <td>
                                    <input type="text" id="pet_breed" name="pet_breed_post" />
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <input type="submit" id="submit" name="submit_post" value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if (isset($_POST["submit_post"])) {
                        echo "<p>Your pet's name is {$_POST["pet_name_post"]}.</p>
                              <p>Your pet's breed is {$_POST["pet_breed_post"]}.</p>";
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>