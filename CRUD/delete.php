<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM com_db WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: dashboard.php");
    }else{
        die("connection failed". $conn->connect_error);
    }
}
?>