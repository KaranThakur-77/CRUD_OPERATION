<?php
$conn=new mysqli('localhost','root','','crud_operation');
if ($conn->connect_error) {
    # code...
    die("connection failed.");
} else {
    # code...
    // echo('Connection success.');
    // $var=$_GET['id'];
    $var1=$_GET['name'];
    $var2=$_GET['age'];
    $var3=$_GET['number'];
    $sql="INSERT INTO test (name,age,contact) VALUE('$var1','$var2','$var3')";
    $result=$conn->query($sql);
    if($result===TRUE){
        echo('data sucessfully added.');
        header('location:record.php'); //redirects you to the assigned page.
    }
    $conn->close();
}

?>