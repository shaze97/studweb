<?php
session_start();
?>
<html>
<head>
    <title>My Student Information</title>
<style>
.container{
    background-color: lightblue;
    padding:2px;
    width:600px;
    height: 700px;
    margin:0 auto;
    border:3px solid black;
    
}
.content{
    width:500px;
    height: 400px;
    margin:0 auto;
    
}

img{
    border:1px solid black;
    display:block;
    margin-left:auto;
    margin-right:auto;
    margin-top:30px;
}

.info{
    text-align:left;
    width:200px;
}

td{
    border-top:2px solid white;
    text-align:left; 
    font-weight:bold;
}

.btn{
    display: flex;  
    justify-content: center;  
    align-items: center; 
}

@media print {
    .container{
    background-color: lightblue;
    padding:2px;
    width:1000px;
    height: 800px;
    margin:0 auto; 
}
.content{
    width:500px;
    height: 400px;
    margin:0 auto;
    
}

img{
    border:1px solid black;
    display:block;
    margin-left:auto;
    margin-right:auto;
    margin-top:30px;
}

.info{
    text-align:left;
}

td{
    border-top:2px solid white;
    text-align:left; 
    font-weight:bold;
}
    .btn {
        display :  none;
    }
}
</style>
</head>
<body>
<div class="container">
<img src="./image/<?php echo $_SESSION['images']; ?>" width="200px" height="200px"><br>
    <table class="content">
        <caption>Student's Information</caption>
        <tr>
            <td class="info">Name</td>
            <td><?php echo $_SESSION['names']; ?></td>
        </tr>
        <tr>
            <td class="info">Class</td>
            <td><?php echo $_SESSION['class']; ?></td>
        </tr>
        <tr>
            <td class="info">Age</td>
            <td><?php echo $_SESSION['age']; ?></td>
        </tr>
        <tr>
            <td class="info">School Name</td>
            <td><?php echo $_SESSION['school']; ?></td>
        </tr>
        <tr>
            <td class="info">School Code</td>
            <td><?php echo $_SESSION['code']; ?></td>
        </tr>
        <tr>
            <td class="info">Level </td>
            <td><?php echo $_SESSION['levels']; ?></td>
        </tr>
        <tr>
            <td class="info">Course</td>
            <td><?php echo $_SESSION['course']; ?></td>
        </tr>
        <tr>
            <td class="info">Address</td>
            <td><?php echo $_SESSION['addr']; ?></td>
        </tr>
        <tr>
            <td class="info">Parent's Phone Number</td>
            <td><?php echo $_SESSION['phone']; ?></td>
        </tr>
    </table>
</div>
    <br>
    <div class="btn">
        <button id="print-btn" onclick="window.print()" >Print</button>
    </div>
</body>
</html>