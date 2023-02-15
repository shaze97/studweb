<?php
include 'conn.php';
if(isset($_POST['submit'])){
   if(!empty($_FILES['photo']['name']) && !empty($_POST['idno']) && !empty($_POST['name']) && !empty($_POST['icno']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['school']) && !empty($_POST['code']) && !empty($_POST['pass']))
     {
        $temp=$_FILES['photo']['tmp_name'];
        $image=$_FILES['photo']['name'];
        $folder = "./image/". $image;
        $id=$_POST['idno'];
        $name=$_POST['name'];
        $ic=$_POST['icno'];
        $addres=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $code=$_POST['code'];
        $pass=$_POST['pass'];

        $sql="INSERT INTO teacher (images,id,names,ic,addres,phone,email,school,code,passwords) VALUES ('$image','$id','$name','$ic','$addres','$phone','$email','$school','$code','$pass')";
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