<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RECORD.</h1>
    <table border="2px solid black">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>CONTACT</th>
        </tr>

<!-- SELECT OPERATION STARTS HERE. -->
<?php
$conn=new mysqli('localhost','root','','crud_operation');
if ($conn->connect_error) {
    # code...
    die("connection failed.");
} else {
    # code...
    // echo('Connection success.');
    $var1=$_GET['name'];
    $var2=$_GET['age'];
    $var3=$_GET['contact'];
    $sql="SELECT * FROM test";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        # code...
        while ($row=$result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo($row['id']);?></td>
                <td><?php echo($row['name']);?></td>
                <td><?php echo($row['age']);?></td>
                <td><?php echo($row['contact']);?></td>
            </tr>
            <?php

        }
    }
    $conn->close();
}
?>
<!-- SELECT OPERATION ENDS HERE> -->
    </table>
    <a href="add_form.php"> ADD MORE DATA</a>
</body>
</html>