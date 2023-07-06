<?php
include "dbconn.php";
$id = $_GET['id'];
$sql ="DELETE FROM `applicants` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Deleted Succesfully");
}
else{
    echo"Failed: " . mysqli_error($conn);
}

?>