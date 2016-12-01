<?php
include 'db.php';
include 'session.php';
//session_start();

// Retireve user info for the interface

# $userID   = $_SESSION['user_ID'];
 #$userName = $_SESSION['user_name'];


/*
* Search friends
*/
$SearchFrndResult = '';
if(isset($_POST['strSearchSubmit']) && $_POST['strSearchUser'] != ''){
    $strSearchUser = $_POST['strSearchUser'];
    $strSearchUser = preg_replace("#[^@0-9a-z]#i","",$strSearchUser);

    $sql = "SELECT S.stud_email, S.stud_name, S.stud_field, S.stud_id
            FROM   students AS S
            WHERE  stud_email LIKE '%".$strSearchUser."%' 
            OR stud_name  LIKE '%".$strSearchUser."%'
            OR stud_field LIKE '%".$strSearchUser."%'"; 
    
    $retval = mysqli_query($conn, $sql);

    $count = 0;
    if ($result=mysqli_query($conn,$sql)){
      $count=mysqli_num_rows($result);
    }
    if($count == 0){
      echo 'No result';
    }
    #Search for the query data  
    else{
        while($row1 = mysqli_fetch_array($retval)){
            if($row1['stud_id'] != $userID){
                $strName = $row1['stud_name'];
                $strEmail= $row1['stud_email'];
                $strID   = $row1['stud_id'];
                $strField= $row1['stud_field'];

                $strInfo = 'Field: '.$strField;
                
                $SearchFrndResult .= displayUser($strName, $strEmail, $strID, $strInfo, 1, 0);
            }
        }
    }
}

/*
*Add friend
*/
$return_msg = '';
if(isset($_POST['submitUserADD'])){
    $strADDID = $_POST['strPromptID'];

    $sql = "INSERT INTO friends (stud_id, frnd_id) 
            VALUES ($userID,$strADDID)";

    $retval = mysqli_query($conn, $sql);

    if(!$retval){
        $return_msg = error_msg('Something went wrong');
    }
    else{
        $return_msg = good_msg('Friend Added');
    }
}

/*
*Delete friend
*/
$return_msg = '';
if(isset($_POST['submitUserREM'])){
    $strDELID = $_POST['strPromptID'];

    $sql = "DELETE FROM friends 
            WHERE  stud_id = $userID
            AND    frnd_id = $strDELID";

    $retval = mysqli_query($conn, $sql);

    if(!$retval){
        $return_msg = error_msg('Something went wrong');
    }
    else{
        $return_msg = good_msg('Friend Deleted');
    }
}

/*
*Course data retreive from friend
*/
$return_msg = '';
if(isset($_POST['CourseData'])){
    $strCID = $_POST['strPromptID'];
    $strFNAME = $_POST['strHIDNAME'];
    #send the link
    $return_msg = good_msg('Done');
    header("location: view_frndCourse.php?frndID=$strCID&frndName=$strFNAME");
}


/*
*Retrieve all the friends
*/
$return_frnds = '';
/*$sql1 = "SELECT * 
        FROM friends AS F
        WHERE F.stud_id = $userID
        ORDER BY frnd_id";*/

$sql1 = "SELECT students.stud_id, students.stud_email, students.stud_name, students.stud_field
        FROM  students
        INNER JOIN friends
              ON friends.frnd_id = students.stud_id
        WHERE friends.stud_id = $userID"; 


$retval = mysqli_query($conn, $sql1);

$count = 0;
if ($result=mysqli_query($conn,$sql1)){
  $count=mysqli_num_rows($result);
}
if($count == 0){
  #echo 'No result';
  $return_frnds = 'NO results';
}
#Search for the query data  
else{
    while($row1 = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
        $strName = $row1['stud_name'];
        $strFID  = $row1['stud_id'];
        $strInfo = $row1['stud_field'];
        $strEmail= $row1['stud_email'];
        #print $strName;
        $return_frnds .= displayUser($strName, $strEmail, $strFID, $strInfo, 0, 1);
    }
}


/*user course info*/
/*sql2 = "SELECT *
        FROM   course_data AS CD
        INNER JOIN stud_courseinfo AS SCI
        ON SCI.stud_id=$userID
        AND SCI.crn=CD.crn
        ORDER BY CD.crn";*/

  


#Display User data
function displayUser($strName, $strEmail, $strID, $strInfo, $displayADD, $displayREM){
    $data = "<div class='dash-sch-insert-card transition'><div class='dash-sch-frnd-display-card'><div class='dash-sch-frnd-img'></div>
    <div class='dash-sch-frnd-info-wrapper'><div class='dash-sch-frnd-main-txt'>".$strName."</div><div class='dash-sch-frnd-sec-txt'>".$strInfo."</div><div class='dash-sch-frnd-sec-txt'>".$strEmail."</div></div></div>
    <div class='dash-sch-frnd-addrem-block'><form action='' method='post'><input type='hidden' name='strPromptID' value='".$strID."'/>
    <input type='hidden' name='strHIDNAME' value='".$strName."'/>
    <button type='submit' name='CourseData' class='dash-sch-frnd-course'>Course Info</button>";
    
    if($displayADD == 1){
        $data .= "<button type='submit' name='submitUserADD' class='dash-sch-frnd-add'><i class='fa fa-plus' aria-hidden='true'>
    </i> ADD</button>";
    }
        
    if($displayREM == 1){
        $data .= "<button type='submit' name='submitUserREM' class='dash-sch-frnd-remove'><i class='fa fa-times' aria-hidden='true'></i> REMOVE</button>";
    }
    
    $data .= "</form></div></div>";
    
    return $data;
}




/*
*Messages | error
*/
function error_msg($msg_txt){
return '<red-txt><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ERROR: '.$msg_txt.'</red-txt>';
}

function good_msg($msg_txt){
return '<green-txt><i class="fa fa-check" aria-hidden="true"></i>'.$msg_txt.'</green-txt>';
}

?>