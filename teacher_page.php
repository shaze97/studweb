<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body{
    padding:0;
    margin:0;
    background-color:#E6E6FA;
}

ul{
    list-style-type: none;
    overflow:hidden;
    padding:0;
    margin:0;
    background-color:rgb(128, 6, 53);
}

li{
    float:left;
}

li a{
    display:inline-block;
    text-decoration:none;
    padding:20px 37px;
    color:white;
}

li a:hover, .stud:hover{
background-color: brown;
}

li.stud{
    display:inline-block;
}

.student-info{
    display:none;
    position: absolute;
    background-color: brown;
    min-width: 70px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index:1;
}

.student-info a{
    color:white;
    padding: 10px 10px;
    text-decoration: none;     
    display:block;
    text-align: left;
}

.student-info a:hover{
    background-color:  #CD5C5C;
}

.stud:hover .student-info{
    display:block;
}

.right{
    float:right;
}

table, tr, td{
    text-align: center;
    color:white;
}

.info{
    text-align:left;
}

.display-image {
    position:relative;
    background-color:rgb(123, 36, 28,0.8);
    width:600px;
    height:550px;
    margin:0 auto;
    border-radius:15px;
    margin-bottom:20px;
}

table{
    width:550px;
    height:300px;
    padding:5px;
    border-radius:20px;
    
}

table, tr, td{
    background-color:#DE3163;
    color:white;
    margin:0 auto;
    text-align:left;
    border:none;
    padding:5px;
    margin-top:10px;
    
    
}


img{
    border:none;
    display:block;
    width:150px;
    height:150px;
    margin-top:20px;
    margin-right:auto;
    margin-left:auto;
    padding:20px 0 0 0;
    background:none;
    border-radius:50%;
}

#foot{
    position: relative;
    bottom:0;
    background-color: rgb(128, 6, 53);
    color: white;
    height:50px;
    width: 100vw;
    left: 0;
    font-size: 16px;
}


</style>
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li class="stud"><a href="#" class="dropdown">Student Information</a>
            <div class="student-info">
                <a href="student_info.html">Fill-in Student Information</a>
                <a href="view_student.php">Display Student Information</a>
            </div>
        </li>
        <li><a href="#">Student Mark</a></li>
        <li><a href="#">Evaluation</a></li>
        <li class="right"><a href="logout.php"><i style="font-size:18px" class="fa">&#xf08b;</i> Log-out</a></li>
    </ul>
</div>
<!--
<div class="profile">
    <table style="width:400px;">
    <caption>Teacher's Profile</caption><br>
        <tr>
            <td>Teacher ID</td>
            <td class="info"><?php echo $_SESSION['id'] ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td class="info"><?php echo $_SESSION['names'] ?></td>
        </tr>

    </table>
</div>
-->
    <div class="display-image">
        <?php
        $query = "SELECT * FROM teacher WHERE id = '".$_SESSION['id']."'";
        $conn = OpenCon();
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>   
            <img src="./images/<?php echo $data['images']; ?>" width="100px" height="100px"><br>
            <table>
                <tr>
                    <td>Teacher ID: </td>
                    <td> <?php echo $data['id'];?> </td>
                </tr>
                <tr>
                    <td>Teacher Name: </td>
                    <td><?php echo $data['names'];?> </td>
                </tr>
                <tr>
                    <td>IC Numbers: </td>
                    <td><?php echo $data['ic'];?> </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><?php echo $data['addres'];?> </td>
                </tr>
                <tr>
                    <td>Phone Number: </td>
                    <td><?php echo $data['phone'];?> </td>
                </tr>
                <tr>
                    <td>School Name: </td>
                    <td><?php echo $data['school'];?> </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $data['email'];?> </td>
                </tr>
        </table>
        <?php
        }
        ?>   
    </div>
    <div style="clear:both"></div>
<br>
<footer>
    <div id="foot">
    
    </div>
</footer>
</body>
</html>