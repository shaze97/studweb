<?php
include 'conn.php';
if(isset($_POST['submit'])){
   if(!empty($_FILES['photo']['name']) && !empty($_POST['id'])&& !empty($_POST['name']) && !empty($_POST['icno']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['post']) && !empty($_POST['email']) && !empty($_POST['pass']))
     {
        //$filename=basename($_FILES['photo']['name']);
        //$type=pathinfo($filename,PATHINFO_EXTENSION);
        $temp=$_FILES['photo']['tmp_name'];
        $image=$_FILES['photo']['name'];
        $folder = "./images/". $image;
        $id=$_POST['id'];
        $name=$_POST['name'];
        $ic=$_POST['icno'];
        $addr=$_POST['address'];
        $phone=$_POST['phone'];
        $post=$_POST['post'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $sql="INSERT INTO staffs (images,id,Names,ic,addres,phone,position,email,pass) VALUES ('$image','$id','$name','$ic','$addr','$phone','$post','$email','$pass')";
        $conn = OpenCon();
        //execute query
        mysqli_query($conn,$sql);

        if(move_uploaded_file($temp,$folder)){
            echo "successfully uploaded";
        }else{
            echo "not success to upload";
        }


     }
}

?>