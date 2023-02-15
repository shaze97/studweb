<?php
include 'conn.php';
if(isset($_POST['submit'])){
   if(!empty($_FILES['photo']['name']) && !empty($_POST['name']) && !empty($_POST['mykid']) && !empty($_POST['age']) && !empty($_POST['class']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['school']) && !empty($_POST['code']) && !empty($_POST['level']) && !empty($_POST['course']))
     {
        $temp=$_FILES['photo']['tmp_name'];
        $image=$_FILES['photo']['name'];
        $folder = "./image/". $image;
        $name=$_POST['name'];
        $mykid=$_POST['mykid'];
        $age=$_POST['age'];
        $class=$_POST['class'];
        $addres=$_POST['address'];
        $phone=$_POST['phone'];
        $school=$_POST['school'];
        $code=$_POST['code'];
        $level=$_POST['level'];
        $course=$_POST['course'];

        $sql="INSERT INTO student (images,names,mykid,age,class,addr,phone,school,code,levels,course) VALUES ('$image','$name','$mykid','$age','$class','$addres','$phone','$school','$code','$level','$course')";
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