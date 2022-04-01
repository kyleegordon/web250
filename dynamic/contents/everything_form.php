<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Everything Form</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <form id="everything_form" action="" method="POST">
                        <table id="everything_table" class="form_table">
                            <tr>
                                <td>Pet's Name</td>
                                <td>
                                    <input type="text" id="pet_name" name="pet_name" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Pet's Breed</td>
                                <td>
                                    <input type="text" id="pet_breed" name="pet_breed" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" id="email" name="email" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Preferred Clothing</td>
                                <td>
                                    <input type="checkbox" name="clothing[]" value="collars" />Collars <br />
                                    <input type="checkbox" name="clothing[]" value="hats" />Hats <br />
                                    <input type="checkbox" name="clothing[]" value="shoes" />Shoes <br />
                                    <input type="checkbox" name="clothing[]" value="sweaters" />Sweaters
                                </td>
                            </tr>
                            <tr>
                                <td>Clothing Size</td>
                                <td>
                                    <select name="clothing_size">
                                        <option value="Xtra Small">Xtra Small</option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                        <option value="Xtra Large">Xtra Large</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Subscribe to Email List</td>
                                <td>
                                    <input type="radio" name="subscribe" id="subscribe_yes" value="yes" checked />
                                    <label for="subscribe_yes">Yes</label>

                                    <input type="radio" name="subscribe" id="subscribe_no" value="no" />
                                    <label for="subscribe_no">No</label>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <td colspan="2">
                                    <input type="submit" id="submit" name="submit" value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <hr />
                    <?php
                    if (isset($_POST["submit"])) {
                        $output = "<h2>Form Results</h2>
                        <p>Your pet's name is {$_POST["pet_name"]}.</p>
                                   <p>Your pet's breed is {$_POST["pet_breed"]}.</p>
                                   <p> Your email is {$_POST["email"]}.</p>";

                        if (empty($_POST['clothing'])) {
                            $output .= "<p>You don't like to wear clothing.</p>";
                        } else {
                            $clothing = $_POST['clothing'];
                            $output .= "<p>You like to wear ";
                            for ($i = 0; $i < count($clothing) - 1; $i++) {
                                $output .= "{$clothing[$i]}, ";
                            }
                            $output .= " {$clothing[count($clothing) - 1]}.</p>";
                        }

                        $output .= "<p>Your clothing size is {$_POST['clothing_size']}.</p>";

                        if ($_POST['subscribe'] === 'yes') {
                            $output .= "<p>You are subscribed to our email list.</p>";
                        } else {
                            $output .= "<p>You are not subscribed to our email list.</p>";
                        }
                        echo $output;
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>