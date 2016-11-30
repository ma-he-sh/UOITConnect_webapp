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
  echo "<b>Displaying student name and their friends id</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT S.stud_name , F.frnd_id AS frnd_id FROM STUDENTS S, FRIENDS F WHERE S.stud_id = F.stud_id ORDER BY S.stud_name";
   
  echo "<table>";
  echo "<tr><th>Student Name</th><th>Friend ID</th>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){    
      $stud_name      = $row1['stud_name'];
      $frnd_id   = $row1['frnd_id'];
      
      echo "<tr><td>$stud_name</td><td>$frnd_id</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>

</body>

</html>