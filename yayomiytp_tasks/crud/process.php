<?php

// what to do with the data

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];


// connect to the database server

include 'db.php' ;

// write sql statement to insert data

$sql = "insert into studentsinfo(first_name,last_name,groupid,city)

values ('$fname','$lname','$city','$groupid');";


if($conn->query($sql)== TRUE){

    echo "Your data was recorded";

}
 else {
    echo "Error:" .$sql. "<br>". $conn->error;
 }


 // close the database connection

 $conn->close();
}








?>