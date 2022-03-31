<div class="row">
    <div class="col-12">
        <main class="main">
            <div class="row text-center">
                <div class="col-sm-12 h2">
                    <h1 class="assignment-title>Sam's Used Cars</h1>
		<h3>Complete Inventory</h3>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-auto h6">
                    <?php
include 'db.php';
$query = "SELECT * FROM inventory ORDER BY Make";
/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Error getting cars from the database: " . mysql_error()."<br>";
}

//***
echo "<table id='Grid' style='width: 80%'><tr>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "</tr>\n";

$class ="odd";

while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    echo "<td>" . $result_ar['Make'] . "</td>";
    echo "<td>" . $result_ar['Model'] . "</td>";
    echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
   echo "</td></tr>\n";
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "</table>";
$mysqli->close();
include 'footer.php';
?>
                </div>
            </div>
        </main>
    </div>
</div>



