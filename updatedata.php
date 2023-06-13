<?php
    $std_id = $_POST['sid'];
    $std_name = $_POST['sname'];
    $std_address = $_POST['saddress'];
    $std_class = $_POST['sclass'];
    $std_phone =$_POST['sphone'];
    $conn = mysqli_connect("localhost","root","Crud1010@","Crud") or die("Connection Failed");
    $sql =  "UPDATE student set sname = '{$std_name}', saddress = '{$std_address}', sclass = '{$std_class}', sphone = '{$std_phone}' where sid = '{$std_id}'";
    $result = mysqli_query($conn, $sql) or die("query unsuccessfull");

    header("Location: http://localhost/crud_html/index.php");
    mysqli_close($conn);
?>
 