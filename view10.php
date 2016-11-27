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
  echo "<b>List of Students in Engineering</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT stud_id, stud_name, stud_email
FROM STUDENTS
WHERE stud_field LIKE '%Engineering%'
";
   
  echo "<table>";
  echo "<tr><th>Student Name</th><th>Student ID</th><th>Student Email</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){   
      $stud_id      = $row1['stud_id']; 
      $stud_name      = $row1['stud_name'];
      $stud_email   = $row1['stud_email'];
      
      echo "<tr><td>$stud_id</td><th>$stud_name</th><td>$stud_email</td></tr>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>