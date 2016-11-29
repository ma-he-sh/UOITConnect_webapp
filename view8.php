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
  
  #SQL command
  $sql1 = "SELECT stud_name
          FROM STUDENTS AS S
          WHERE (SELECT COUNT(*)
          FROM FRIENDS AS F
          WHERE F.stud_id=S.stud_id)>5";
  
  echo "<table>";
  echo "<tr><th>Student Name</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){
      $stud_name   = $row1['stud_name'];
      
      echo "<tr><td>$stud_name</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>