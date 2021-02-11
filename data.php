<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/startpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="menu-bar">
    <ul>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"> Classes</a>
        <div class="submenu-1">
          <ul>
            <li><a href="data.php">TECSE-B</a></li>

          </ul>
        </div>
      </li>
      <li><a href="#">Services</a>
        <div class="submenu-1">
          <ul>
            <li><a href="insertform.html">Insert</a></li>
            <li class="hover-me"><a href="updateno.html">Update</a>

            </li>
            <li class="hover-me"><a href="delete.html">Delete</a>

            </li>
          </ul>
        </div>
      </li>
      <li><a href="lecturerdata.php">Lecturer</a></li>
      <li><a href="aboutus.html">About Us</a></li>

      <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
<table  border="3">
<tr>
<th>Roll_No</th>
<th>Name</th>
<th>Email</th>
<th>Mobile_No</th>
<th>Marks(in per)</th>

</tr>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM tecseb";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
            echo "<tr >";
                echo "<td>" . $row['Roll_No'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Mobile_No'] . "</td>";
                echo "<td>" . $row['Marks'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
</body>

</html>
