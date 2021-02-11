<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<link rel="stylesheet" href="css/startpage.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <section>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt delete query execution
$Roll_No = mysqli_real_escape_string($link, $_POST['Roll_No']);
$sql = "DELETE FROM tecseb WHERE Roll_No=$Roll_No";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<p>
</p>
<br>
</br>
<div action='data.php'>
  <button type="Back"><a href='data.php' style="text-decoration:none">Back</a></button>
</div>

</section>
</body>
</html>
