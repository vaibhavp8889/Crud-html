<?php include 'header.php';
    if(isset($_POST['deletebtn'])){
        $conn = mysqli_connect("localhost","root","Crud1010@","Crud") or die("Connection Filed");
        $std_id = $_POST['sid'];
        $sql = "DELETE FROM student WHERE sid = {$std_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");
        echo "Delete page";

        header("Location: http://localhost/crud_html/index.php");
        mysqli_close($conn);

    }
?>


<div id="main-content">
    <h2>Delete Record</h2>
    
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    
    
</div>
</div>
</body>
</html>
