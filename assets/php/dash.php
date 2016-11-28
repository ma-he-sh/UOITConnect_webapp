<?php
include 'db.php';
session_start();
/*
* Retireve user info for the interface
*/
 $userID   = $_SESSION['user_ID'];
 $userName = $_SESSION['user_name'];


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
                
                $SearchFrndResult .= displayUser($strName, $strEmail, $strID, $strInfo);
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
if(isset($_POST['submitUser'])){
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

#Display User data
function displayUser($strName, $strEmail, $strID, $strInfo){
    $data = "<div class='dash-sch-insert-card transition'><div class='dash-sch-frnd-display-card'><div class='dash-sch-frnd-img'></div>
    <div class='dash-sch-frnd-info-wrapper'><div class='dash-sch-frnd-main-txt'>".$strName."</div><div class='dash-sch-frnd-sec-txt'>".$strInfo."</div></div></div>
    <div class='dash-sch-frnd-addrem-block'><form action='' method='post'><input type='hidden' name='strPromptID' value='".$strID."'/>
    <button type='submit' name='submitUserADD' class='dash-sch-frnd-add'><i class='fa fa-plus' aria-hidden='true'>
    </i> ADD</button><button type='submit' name='submitUserREM' class='dash-sch-frnd-remove'><i class='fa fa-times' aria-hidden='true'></i> REMOVE</button>
    </form></div></div>";
    return $data;
}




/*
*Calender page action
*/




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