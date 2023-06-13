<?php 
   
    $conn = mysqli_connect("localhost","root","Crud1010@","Crud") or die("Connection Filed");
    $std_id = $_GET['id'];
    $sql = "DELETE FROM student WHERE sid = {$std_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");
    echo "Delete page";

    header("Location: http://localhost/crud_html/index.php");
    mysqli_close($conn);
?>