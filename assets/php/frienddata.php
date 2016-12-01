<?php 
include 'db.php';
include 'session.php';

$crn = $_GET['crn'];
$uid = $_SESSION['user_ID'];
$sql = "SELECT stud_name FROM students WHERE stud_id = ANY (SELECT f.frnd_id FROM `friends` AS f INNER JOIN stud_courseinfo AS s ON f.frnd_id = s.stud_id WHERE f.stud_id ='".$uid."' AND crn = '".$crn."')";

$retval = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($retval))
{
    #echo($row['stud_name']); 
    #echo("<br>");
    echo "<div class='display-pop-up-user-flex'>
     <div class='display-img'></div>
      <div class='display-pop-up-name'>".$row['stud_name']."
      </div>
    </div>";
}

                
?>