<?php
session_start();
include 'conn.php';
if(isset($_POST['show_info'])){
    $id=$_POST['mykid'];

    $sql="SELECT * FROM student WHERE mykid='$id'";
    $conn = OpenCon();
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);

        $_SESSION['names']=$row['names'];
        $_SESSION['images']=$row['images'];
        $_SESSION['mykid']=$row['mykid'];
        $_SESSION['age']=$row['age'];
        $_SESSION['class']=$row['class'];
        $_SESSION['addr']=$row['addr'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['school']=$row['school'];
        $_SESSION['code']=$row['code'];
        $_SESSION['levels']=$row['levels'];
        $_SESSION['course']=$row['course'];
        

        header("Location:display_info.php");

    }
}
?>