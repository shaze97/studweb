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
    background-color:rgb(123, 36, 28,0.8);
    width:500px;
    height:600px;
    margin:0 auto;
    border-radius:20px;
    margin-bottom:20px;
}

table{
    width:200px;
    height:350px;
    padding:5px;
    border-radius:4px;
    background-color:rgb(255,255,255,0.6);
    
}

table, tr, td{
    /*background-color:#DE3163;*/  
    color:black;
    margin:0 auto;
    text-align:left;
    border:none;
    margin-top:10px;
    padding:5px;
    
}

table{
    border:3px solid pink;
}



img{
    border:none;
    display:block;
    width:150px;
    height:150px;;
    margin-top:20px;
    margin-right:auto;
    margin-left:auto;
    padding:20px 0 0 0;
    background:none;
    border-radius:50%;
}

/* Container needed to position the overlay. Adjust the width as needed */
.container {
  position: relative;
  width:200px;;
  float:left;
  margin:15px;
  border:none;
  padding:5px;
  border-radius:5px;
}

/* Make the image to responsive */
.image {
  width: 100%;
  height: auto;
}

/* The overlay effect (full height and width) - lays on top of the container and over the image */
.overlay {
  position: absolute;
  bottom: 0;
  left: 11px;
  right: 0;
  top:11px;;
  background-color:rgb(0,0,0,0.8);
  overflow: hidden;
  width: 188px;
  height: 327px;
  transform: scale(0);
  transition: .3s ease;

}
/* When you mouse over the container, the overlay text will "zoom" in display */
.container:hover .overlay {
  transform: scale(1);
}

.btn-info{
    transition: .5s ease;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background-color:rgb(128, 6, 53);
    color:white;
    padding:5px;
    border-radius:3px;
}

.btn-info:hover{
    height:30px;
    width:150px;
    background-color:rgb(242,36,90);
}

form{
    padding:5px;
}
</style>
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="staff_page.php">Home</a></li>
        <li><a href="view_student_staff.php">Student Information</a></li>
        <li><a href="#">Student Mark</a></li>
        <li><a href="#">Evaluation</a></li>
        <li class="right"><a href="logout.php"><i style="font-size:18px" class="fa">&#xf08b;</i> Log-out</a></li>
    </ul>
</div>
  
        <?php
        $query = "SELECT * FROM student";
        $conn = OpenCon();
        $result = mysqli_query($conn, $query);
 
        if(mysqli_num_rows($result) > 0)  
        {  
             while($row = mysqli_fetch_array($result))  
             {  
        ?>   
        <div class="container">
           <!-- <img src="./image/<?php echo $data['images']; ?>" width="100px" height="100px"><br>
            <p style="text-align:center;"><?php echo $data['names'];?></p>-->
            <form method="post" action="view_student_engine.php">  
                          <div style="border:1px solid #333; background-color:rgba(255,255,255,0.7); border-radius:5px; padding:10px;" align="center">  
                               <img src="./image/<?php echo $row["images"]; ?>" class="img-responsive" /><br /> 
                               <h5 class="text-info"><?php echo $row["names"]; ?></h5>  <!-- display -->
                               <h5 class="text-danger"><?php echo $row["class"]; ?></h5>  
                               <input type="hidden" name="mykid" value="<?php echo $row["mykid"]; ?>" />
                               <div class="overlay">
                               <input type="submit" name="show_info" style="margin-top:5px;" class="btn-info" value="Show Information" />
                               </div>  
                          </div>  
                     </form>  
             </div>
        <?php
        }
     }
        ?>
<!--       
 <script>
function myFunction() {
    document.getElementById("table-info").style.display = "block";
}

function hide(){
    document.getElementById("table-info").style.display = "none";
}
</script>       
-->   
</body>
</html>