<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<body>
  <!--header-->
  <?php
  include 'assets/php/db.php';
  echo "<b>This will collect data from single crn: 43509</b>";
  
  $crn = "43509";
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT * FROM course_data ORDER BY `crn` DESC";
  
  echo "<table>";
  echo "<tr><th>CRN</th><th>Course Title</th><th>Course Code</th><th>Location</th><th>Course Type</th><th>Professor</th><tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){

    if ($row1['crn'] == $crn){
     
      $crn      = $row1['crn'];
      $ctitle   = $row1['ctitle'];
      $ccode    = $row1['ccode'];
      $location =$row1['location'];
      $ctype    = $row1['ctype'];
      $proff    = $row1['professor'];
      
      echo "<tr><td>$crn</td><td>$ctitle</td><td>$ccode</td><td>$location</td><td>$ctype</td><td>$proff</td></tr>";
    }
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

    <?php
  include 'assets/php/db.php';
  echo "<b>This will return all the cource data</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT * FROM course_data ORDER BY `crn` DESC";
  
  echo "<table>";
  echo "<tr><th>CRN</th><th>Course Title</th><th>Course Code</th><th>Location</th><th>Course Type</th><th>Professor</th><tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){
     
      $crn      = $row1['crn'];
      $ctitle   = $row1['ctitle'];
      $ccode    = $row1['ccode'];
      $location =$row1['location'];
      $ctype    = $row1['ctype'];
      $proff    = $row1['professor'];
      
      echo "<tr><td>$crn</td><td>$ctitle</td><td>$ccode</td><td>$location</td><td>$ctype</td><td>$proff</td></tr>";
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>