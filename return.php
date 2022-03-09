<?php
if(isset($_GET["borrowId"])){
    $borrowId = $_GET["borrowId"];

    //Connecting to the db to delete
    require_once "db_connection.php";

    //delete query
    $deleteQuery = "DELETE FROM `borrow` WHERE borrowId='$borrowId'";

    echo $deleteQuery;

    $delete = mysqli_query($link,$deleteQuery);

    //Checking if the deletion was successful
    if(isset($delete)){
        //Redirecting back to admin.php to confirm return action
        header("location:admin.php");
    }
    else{
        die("Deletion failed!");
    }
}
