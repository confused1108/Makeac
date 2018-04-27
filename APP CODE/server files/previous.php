<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 06-Apr-18
 * Time: 4:47 PM
 */
include "db.php";

if(isset($_GET['insert'])) {
    $username = $_GET['username'];
    $usertype = $_GET['usertype'];
    $status = "0";
    if ($usertype == "1") {
        $query = mysqli_query($con, "SELECT * FROM student WHERE roll_number='$username'");
        $row = mysqli_fetch_array($query);
        $cat_id = $row['student_id'];
    } else {
        $query = mysqli_query($con, "SELECT * FROM staff WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        $cat_id = $row['staff_id'];
    }
    $data=array();
    $query2=mysqli_query($con,"SELECT * FROM complaints WHERE user='$usertype' AND cat_id='$cat_id' ORDER BY complaint_id DESC");
    while ($row=mysqli_fetch_object($query2)){
        $data[]=$row;
    }
    echo json_encode($data);
}
?>