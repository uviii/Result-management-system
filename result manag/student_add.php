<?php
session_start();
error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$father = $_POST['father'];
$address = $_POST['address'];
$cls = $_POST['cls'];
$pass = $_POST['pass'];
// INSERT INTO `stddata`(`id`, `fname`, `lname`, `cls`, `father`, `address`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
$sql=" INSERT INTO `stddata`(`fname`, `lname`, `cls`, `father`, `address`, `pass`, `status`) VALUES ('$fname','$lname','$cls','$father','$address','$pass','0')";
// echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
$_SESSION['action1']="weldone! A New Registration Added Successfully....";
header('location:student_add.php');
}
else{
$_SESSION['action1']="something gone wrong! please try again ....";
header('location:student_add.php');
}
// header('location:registration.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        
        <title>Student Add | Result Management</title>
        <link rel="stylesheet" href="css/style1.css">
        
    </head>
    <body>
        <?php include('header.php'); ?>
        <!-- secondary nav bar -->
        
        <div style="font-size: 20px; margin-left: 70px;  ">
            <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
            <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
                <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="student_add.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Student-Add</a> </p>
            </div>

           <!-- Form for student add -->

            <div style="width:93%; margin-left:3%; margin-top:40px; border:0.5px solid gray; background-color:#f2f2f2;">
                <div style="border:0.5px solid gray; padding: 15px; background-color: #e6e6e6;"><h3>Student <span style="font-size:10px;">Add</span></h3></div>
                <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?></p></div>
                <br>

                <form name="" method="post" action="" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
                    <div class="card-body card-block">
                        
                        <div class="form-group"><label for="company"  class=" form-control-label">Select Class*:</label>
                        <select class="form-control" name="cls">
                            <option value="1">Grade-1</option>
                            <option value="2">Grade-2</option>
                            <option value="3">Grade-3</option>
                            <option value="4">Grade-4</option>
                            <option value="5">Grade-5</option>
                            <option value="6">Grade-6</option>
                            <option value="7">Grade-7</option>
                            <option value="8">Grade-8</option>
                        </select>
                    </div>
                    <div class="form-group"><label  class=" form-control-label">fname:</label><input type="text" name="fname" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
                    <div class="form-group"><label  class=" form-control-label">lname:</label><input type="text" name="lname" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
                    <div class="form-group"><label  class=" form-control-label">father:</label><input type="text" name="father" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
                    <div class="form-group"><label  class=" form-control-label">address:</label><input type="text" name="address" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
                    
                    
                    <div class="form-group"><label  class=" form-control-label">password:</label><input type="text" name="pass"  value="result@123" class="form-control" id="tname" required="true"></div>
                    
                    <br>
                    
                    
                    <input type="submit" value="submit" name="submit">
                    
                    
                </div>
            </form>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>
<?php }  ?>