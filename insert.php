
<html>
<head>
  <meta charset="utf-8">
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

    // Escape user inputs for security
    $Roll_No = mysqli_real_escape_string($link, $_POST['Roll_No']);
    $Name = mysqli_real_escape_string($link, $_POST['Name']);
    $Email = mysqli_real_escape_string($link, $_POST['Email']);
    $Mobile_No = mysqli_real_escape_string($link, $_POST['Mobile_No']);
    $Marks = mysqli_real_escape_string($link, $_POST['Marks']);

    // attempt insert query execution
    $sql = "INSERT INTO tecseb (Roll_No, Name,Email,Mobile_No,Marks) VALUES ('$Roll_No', '$Name', '$Email','$Mobile_No','$Marks')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

<p></p>
<a href='data.php'>
<button type="Back">Back</button>
</a>
</section>
</body>
</html>
