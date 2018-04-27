<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 06-Apr-18
 * Time: 3:48 PM
 */
include "db.php";
if(isset($_POST['feedback_insert'])) {
    $feedback=$_POST['feedback'];
    $db = new PDO("mysql:host=mysql.hostinger.in;dbname=u689854465_makac", "u689854465_makac", "7GkAX4wNhd1x");
    if ($db) {
        $sql = "INSERT INTO 
                        feedback(feedback)
                    VALUES(?)";
        $test = $db->prepare($sql);
        $test->bindParam(1, $feedback);
        if ($test->execute())
            echo "success";
        else
            echo "error";
    }
    else
        echo "error";
}
?>