<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">FizzBuzzBangEverything!</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <form id="fizzbuzz_form" action="" method="POST">
                        <table id="post_table" class="form_table">
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" id="name" name="name" value="Kylee" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Beginning Number</td>
                                <td>
                                    <input type="text" id="beg_number" name="beg_number" value="1" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Ending Number</td>
                                <td>
                                    <input type="text" id="end_number" name="end_number" value="130" required />
                                </td>
                            </tr>
                            <tr>
                                <td>First Word</td>
                                <td>
                                    <input type="text" id="first_word" name="first_word" value="Fizz" required />
                                </td>
                            </tr>
                            <tr>
                                <td>First Word's Number</td>
                                <td>
                                    <input type="text" id="first_number" name="first_number" value="3" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Second Word</td>
                                <td>
                                    <input type="text" id="second_word" name="second_word" value="Buzz" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Second Word's Number</td>
                                <td>
                                    <input type="text" id="second_number" name="second_number" value="5" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Third Word</td>
                                <td>
                                    <input type="text" id="third_word" name="third_word" value="Bang" required />
                                </td>
                            </tr>
                            <tr>
                                <td>Third Word's Number</td>
                                <td>
                                    <input type="text" id="third_number" name="third_number" value="7" required />
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
                        echo "<p>Hello {$_POST["name"]}, welcome to Pawsitively Posh!</p>";
                        echo "<ul id=\"fb-ul\">";
                        for ($i = $_POST["beg_number"]; $i <= $_POST["end_number"]; $i++) {
                            $word = "";
                            if (isDivisible($i, $_POST["first_number"])) {
                                $word .= "{$_POST["first_word"]}";
                            }

                            if (isDivisible($i, $_POST["second_number"])) {
                                $word .= "{$_POST["second_word"]}";
                            }

                            if (isDivisible($i, $_POST["third_number"])) {
                                $word .= "{$_POST["third_word"]}";
                            }

                            if ($word === '') {
                                $word = $i;
                            }
                            echo "<li>$word</li>";
                        }
                        echo "</ul>";
                    }

                    function isDivisible($number, $divisor)
                    {
                        if ($number % $divisor === 0) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                    ?>

                </div>
            </div>
        </main>
    </div>
</div>