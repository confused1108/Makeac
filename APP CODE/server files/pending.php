<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 07-Apr-18
 * Time: 9:13 AM
 */
include "db.php";

if(isset($_GET['insert'])) {
    $username = $_GET['username'];
    $status = "0";
        $query = mysqli_query($con, "SELECT category FROM workers WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        $category = $row['category'];
    $data=array();
    $query2=mysqli_query($con,"SELECT * FROM complaints WHERE category='$category' AND status='$status' ORDER BY complaint_id ASC ");
    while ($row=mysqli_fetch_object($query2)){
        $data[]=$row;
    }
    echo json_encode($data);
}
?>