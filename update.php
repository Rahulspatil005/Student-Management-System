<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dropdown Menu Bar!!!</title>
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


  $Roll_No = mysqli_real_escape_string($link, $_POST['Roll_No']);
  $Name = mysqli_real_escape_string($link, $_POST['Name']);
  $Email = mysqli_real_escape_string($link, $_POST['Email']);
  $Mobile_No = mysqli_real_escape_string($link, $_POST['Mobile_No']);
  $Marks = mysqli_real_escape_string($link, $_POST['Marks']);

  $sql = "UPDATE tecseb SET  Roll_No='" . $_POST['Roll_No'] . "', Name='" . $_POST['Name'] . "', Email='" . $_POST['Email'] . "',Mobile_No='" .$_POST['Mobile_No']."',Marks='" .$_POST['Marks']."' WHERE Roll_No='" . $_POST['Roll_No'] . "'";

  if(mysqli_query($link, $sql)){
      echo "Records were Updated successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // Close connection
  mysqli_close($link);
  ?>
<p></p>
<a href='data.php'>
<button type="Back">Back</button>
</a>
</section>

</body>
</html>
