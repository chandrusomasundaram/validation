<?php
require "init.php";

$name = $_POST["name"];
$dept = $_POST["dept"];
$mail = $_POST["mail"];
$mobi = $_POST["mobi"];
$query = "SELECT * FROM emp_Det WHERE email LIKE '".$mail."' AND mob_no LIKE '".$mobi."';";
$result = mysqli_query($db_conn,$query);

if(mysqli_num_rows($result) > 0) {
    echo "Employee detail already inserted";
} 
else {
    $query = "INSERT INTO emp_det VALUES('','".$name."','".$dept."','".$mail."','".$mobi."')";
    $result = mysqli_query($db_conn,$query);
    if($result) {
        echo "Inserted Successfully";
    } 
    else {
        echo "Problem in Inserting";
    }
}
?>