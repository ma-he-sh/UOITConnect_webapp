<?php
include 'db.php';
include 'session.php';
$uid =  $_SESSION['user_ID'];

//print_r $id;

if(isset($_POST['courseSubmit'])){
    for($i = 1; $i<9; $i++){
        $course = $_POST["course-id".$i];
        
        if($course !=NULL){ 
    
        $sql = "INSERT INTO stud_courseinfo(stud_id, crn) VALUES ('".$uid."','".$course."')";
        $retval = mysqli_query($conn, $sql);
            
        $jsondata = file_get_contents('http://localhost/uoitconnect/api.php/class?filter=crn,eq,'.$course.'&transform=1');
        $data = json_decode($jsondata, true);

//    var_dump($data);

            foreach ($data as $class) {
                foreach ($class as $row) {
                    $cid = $row ['cid'];
                    $crn = $row['crn'];
                    $title = $row ['title'];
                    $ccode = $row ['ccode'];
                    $section = $row ['section'];
                    $week = $row ['week'];
                    $stime =$row ['stime'];
                    $etime =$row ['etime'];
                    $day = $row ['day'];
                    $location =$row ['location'];
                    $sdate =$row ['sdate'];
                    $edate =$row ['edate'];
                    $ctype =$row ['ctype'];
                    $prof =$row ['prof'];
                
                $sql2 = "REPLACE INTO `course_data`(`cid`, `crn`, `ctitle`, `ccode`, `section`, `week`, `stime`, `etime`, `day`, `location`, `sdate`, `edate`, `ctype`, `professor`) VALUES ('".$cid."','".$crn."','".$title."','".$ccode."','".$section."','".$week."','".$stime."','".$etime."','".$day."','".$location."','".$sdate."','".$edate."','".$ctype."','".$prof."')";
        
        $retval2 = mysqli_query($conn, $sql2);
                }
                
                }
            }
    
        
        }
    }

?>