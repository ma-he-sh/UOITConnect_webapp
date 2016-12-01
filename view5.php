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
 <div class="dash-view-box transition">
  <?php
  include 'assets/php/db.php';

  echo "<b>Display a list of friends who are available in other days except Monday</b>";
  #SQL command
  $sql1 = "SELECT DISTINCT S.stud_name
  FROM   STUDENTS AS S, STUD_COURSEINFO AS SC, FRIENDS AS F, COURSE_DATA AS CD
  WHERE  SC.stud_id=S.stud_id
                AND F.frnd_id=S.stud_id
                AND SC.crn=CD.crn
                AND CD.day = 'Monday'";
   
  echo "<table>";
  echo "<tr><th>Student Name</th></tr>";
  
  $retval1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($retval1)){   
      $stud_name      = $row1['stud_name']; 
      #$stud_id      = $row1['stud_id'];
      
      echo "<tr><td>$stud_name</td></tr>";  
  }
  
  echo '</table>';
  
  mysqli_close($conn);
?>
  </div>
</body>

</html>