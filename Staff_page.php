<?php
session_start();
include 'conn.php';
?>
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

li a{
    float:left;
    display:inline;
    text-decoration:none;
    padding:20px;
    color:white;
}

li a:hover{
background-color: brown;
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
    float:left;
    background-color:#93BFCF;
    width:650px;
    height:600px;
    /*margin:0 auto; ni utk centerkan div */
    border-radius:10px;
    margin-bottom:20px;
    margin-top:20px;
    left:40px;
    
}

table{
    width:620px;
    height:350px;
    padding:5px;
    border-radius:10px;
    background-color:white;
    
}

table, tr, td{
    /*background-color:#DE3163;*/  
    color:gray;
    margin:0 auto;
    text-align:left;
    border:none;
    margin-top:2px;
    padding:5px;
    
}


.prof{
    border:none;
    display:block;
    width:200px;
    height:200px;
    margin-top:5px;
    margin-right:auto;
    margin-left:auto;
    padding:10px 0 0 0;
    background:none;
    border-radius:50%;
   
}

.data{
    position:absolute;
    right:20px;
    margin-top:20px;
    height:580px;
    width:650px;
    border-radius:10px;
    background-color:none;
}

.data-ctn{
    width:600px;
    height:160px;
    background-color:none;
    position:relative;
    top:30px;
    left:25px;
    border-radius:10px;

}

.dta-i:hover{
    cursor:pointer;
    
}

.dta-i{
    position:absolute;
    left: 10px;
    top: 5px;
    z-index:2;
    border-radius:10px;
}

#foot{
    clear:left;
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
        <li><a href="view_student_staff.php">Student Information</a></li>
        <li><a href="#">Student Mark</a></li>
        <li><a href="#">Evaluation</a></li>
        <li class="right"><a href="logout.php"><i style="font-size:18px" class="fa">&#xf08b;</i> Log-out</a></li>
    </ul>
</div>

<div class="display-image">
        <?php
        $query = "SELECT * FROM staffs WHERE id = '".$_SESSION['id']."'";
        $conn = OpenCon();
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>   
            <img class="prof" src="./images/<?php echo $data['images']; ?>" width="200px" height="200px"><br>
            <table>
                <tr>
                    <td>ID Staff: </td>
                    <td><?php echo $data['id'];?> </td>
                </tr>
                <tr>
                    <td>Staff Name: </td>
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
                    <td>Position: </td>
                    <td><?php echo $data['position'];?> </td>
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
    <div class="data">
        <div class="data-ctn">
             <img class="dta-i" src="data-v.jpeg" width="580px" height="150px">
        </div> <br>
        <div class="data-ctn">
             <img class="dta-i" src="data-v.jpeg" width="580px" height="150px">
        </div> <br>
        <div class="data-ctn">
             <img class="dta-i" src="data-v.jpeg" width="580px" height="150px">
        </div>

    </div>
<footer>
    <div id="foot">
    
    </div>
</footer>
</body>
</html>