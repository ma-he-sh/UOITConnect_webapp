<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php
  include 'assets/php/dash.php';
  if(!$_SESSION){printf("<script>location.href='signin.php'</script>");}
?>

 <style>
    table{
    width: 100%;
      text-align: center;
    border-collapse: collapse;
  }
  table,
  th,
  td {
    border: 1px solid #eee;
    padding-top: 4px;
    padding-bottom: 4px;
  }
  </style>

<body>
  <!--header-->
  <div class="dash-view-box transition">
  <?php
  include 'assets/php/db.php';
  echo "<b>List of Students in Engineering and contact information</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT stud_name, stud_email
FROM STUDENTS
WHERE stud_field LIKE '%Engineering%'
";
   
  echo "<table>";
  echo "<tr><th>Student ID</th><th>Student Email</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){   
      #$stud_id      = $row1['stud_id']; 
      $stud_name      = $row1['stud_name'];
      $stud_email   = $row1['stud_email'];
      
      echo "<tr><th>$stud_name</th><td>$stud_email</td></tr>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>
  </div>
</body>

</html>