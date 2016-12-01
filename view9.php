<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

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
  
  echo "<b>List students and number of friends</b>";
  #SQL command
  $sql1 = "SELECT S.stud_name, COUNT(*) as count
          FROM STUDENTS AS S, FRIENDS AS F
          WHERE F.stud_id=S.stud_id
          GROUP BY S.stud_id";
  
  echo "<table>";
  echo "<tr><th>Student Name</th><th># Friends</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){
      $stud_name   = $row1['stud_name'];
      $count   = $row1['count'];
      
      echo "<tr><td>$stud_name</td><td>$count</td>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>
  </div>
</body>

</html>