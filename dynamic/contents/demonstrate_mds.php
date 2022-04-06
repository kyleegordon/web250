<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Demonstrate Math, Dates, and Strings</h2>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <?php
                    $current_date = date("Y/m/d");
                    $current_time = date("h:i:sa");
                    echo "<p>Today is " . $current_date . " and the time is " . $current_time . "</p>";
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>