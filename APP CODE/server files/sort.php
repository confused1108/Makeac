<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 16-Apr-18
 * Time: 11:53 PM
 */
include "db.php";

if(isset($_GET['insert'])) {
    $username = $_GET['username'];
    $region=$_GET['region'];
    $status = "0";
    $query = mysqli_query($con, "SELECT category FROM workers WHERE username='$username'");
    $row = mysqli_fetch_array($query);
    $category = $row['category'];
    $data=array();
    $query2=mysqli_query($con,"SELECT * FROM complaints WHERE category='$category' AND status='$status' AND region='$region' ORDER BY complaint_id ASC ");
    while ($row=mysqli_fetch_object($query2)){
        $data[]=$row;
    }
    echo json_encode($data);
}
?>