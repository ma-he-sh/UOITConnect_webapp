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
  echo "<b>Display the names and student id’s of all students registered in course crn 40673</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT stud_name,stud_id
FROM  STUDENTS
WHERE stud_id = ANY(  
SELECT stud_id FROM STUD_COURSEINFO  
WHERE CRN='40673')
";
  
  echo "<table>";
  echo "<tr><th>Student Name</th><th>Student ID</th>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){    
      $stud_name      = $row1['stud_name'];
      $stud_id   = $row1['stud_id'];
      
      echo "<tr><td>$stud_name</td><td>$stud_id</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>