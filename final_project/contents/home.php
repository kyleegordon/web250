<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h2 class="assignment-title">Table of Contents</h2>
                    <?php
                    if (isset($_GET['alert'])) {
                        echo $_GET['alert'];
                    }
                    ?>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h4">
                    <ul id="toc_list">
                        <li><a href="?p=register.php">Register</a></li>
                        <li><a href="?p=login.php">Login</a></li>
                        <li><a href="?p=account.php">Account</a></li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</div>