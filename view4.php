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
  <div class="dash-header-container">
            <div class="dash-header">
                <div class="dash-user-container">
                    <div class="dash-user-img-id"><?php echo $imageID; ?></div>
                    <div class="dash-user-name-txt">
                        <?php  echo $userName; ?>
                    </div>
                    <a href="assets/php/sign_out.php">
                        <div class="dash-user-signout red-color"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                    </a>
                </div>
            </div>
            <div class="dash-header-nav">
                <a href="dashb.php">
                    <div class="dash-nav-btn"> <i class="fa fa-th-large" aria-hidden="true"></i> </div>
                </a>
            </div>
        </div>
  <!--header-->
  <div class="dash-view-box transition">
  <?php
  include 'assets/php/db.php';
  echo "<b>Displaying student name and their friends id</b>";
  
  $post_disp = '';
  
  #SQL command
  $sql1 = "SELECT S.stud_name , F.frnd_id AS frnd_id FROM students S, friends F WHERE S.stud_id = F.stud_id ORDER BY S.stud_name";
   
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
  </div>
</body>

</html>