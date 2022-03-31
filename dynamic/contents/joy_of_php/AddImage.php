<html>
<head>
<title>Sam's Used Cars - Image Upload</title>
</head>
<body background="bg.jpg">
<h1>Sam's Used Cars</h1>
<h3>Add Image</h3>
<?php include 'db.php';
$vin = $_GET['VIN'];
$query = "SELECT * FROM INVENTORY WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
	$make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $price = $result_ar['ASKING_PRICE'];
}
echo "<p>$make $model <br>VIN: $vin</p>";
echo "<p>Asking Price: $".number_format($price,0) ."</p>";


   
?>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input name="VIN" type="hidden" value= "<?php echo "$vin" ?>" />
<input type="submit" name="submit" value="Submit">
</form>
<br/><br/>
<?php
$query = "SELECT * FROM images WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Got some results
   // Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $image = $result_ar['ImageFile'];
    echo "<img src='uploads/$image' width= '250'>  " ;
}
}
$mysqli->close();
echo "<br><br><a href='../../?p=joy_of_php/sams_used_cars.php'>Sam's Used Cars Home</a>";
  echo "<br>Copyright 2017, Alan Forbes.  All rights reserved.";
?>
</body>

</html> 