<?php
session_start();
error_reporting(0);
include('dbc1.php');
$id=$_GET['id'];
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
if(isset($_POST['submit']))
{
$sub = $_POST['sub'];
$subn = $_POST['subn'];
$cls = $_POST['cls'];
$tmark = $_POST['tmark'];
$pmark = $_POST['pmark'];
$omark = $_POST['omark'];
$texam = $_POST['texam'];
$session = $_POST['session'];
$tname = $_POST['tname'];
$ids = $_POST['ids'];
$name = $_POST['name'];
include('dbc1.php');

$sql="UPDATE `result` SET `sub`='$sub',`subn`='$subn',`cls`='$cls',`tmark`='$tmark',`pmark`='$pmark',`omark`='$omark',`texam`='$texam',`session`='$session',`tname`='$tname',`ids`='$ids',`name`='$name' WHERE id=$id and status=0 or status=2";
// echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
$_SESSION['action1']="weldone! Value updated successfullly ....";

}
else{
echo '<script>alert("something wrong.")</script>';
}
header('location:student_add.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        
        <title>Result Update | result management system </title>
        <link rel="stylesheet" href="css/style1.css">
       
    </head>
    <body>
        <?php include('header.php'); ?>
       <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="result_manage.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Result-Manage</a> </p>
      </div>

        <div style="width:93%; margin-left:3%; margin-top:40px; border:0.5px solid gray; background-color:#f2f2f2;">
            <div style="border:0.5px solid gray; padding: 15px; background-color: #e6e6e6;"><h3>Student <span style="font-size:10px;">Add</span></h3></div>
            <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?></p></div>
            <br>
            <form name="" method="post" action="" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
                
                <?php
                include('dbc.php');
                $id=$_GET['id'];
                
                $selectquery = "SELECT * FROM `result` where id=$id limit 1 ";
                $query = mysqli_query($conn , $selectquery) or die("error");
                
                $result= mysqli_fetch_array($query);
                
                ?>
                <div class="form-group">
                <input type="text" value="<?php echo $result['name'] ?>" name="name"   class="form-control" ></div>
                <div class="form-group"><input type="text"  value="<?php echo $result['ids'] ?> " name="ids"  class="form-control" ></div>
                <div class="card-body card-block">
                    
                    <div class="form-group"><label  class=" form-control-label">Select Class*:</label>
                    <select  class="form-control" name="cls">
                   </select>
                </div>
                <div class="form-group"><label for="company"  class=" form-control-label">subject*:</label>
                
                <input type="hidden" value="<?php echo $result['sub'] ?>" name="sub">
                <div><input type="text" value="<?php echo $result['subn'] ?>" name="subn"></div>
                
            </div>
            <div class="form-group"><label  class=" form-control-label">Total marks:</label>
            <input type="text" value="<?php echo $result['tmark'] ?>" name="tmark" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
            <div class="form-group"><label  class=" form-control-label">Pass mark:</label><input type="text" name="pmark" placeholder="categories name*" value="<?php echo $result['pmark'] ?>" class="form-control" id="tname" required="true"></div>
            <div class="form-group"><label  class=" form-control-label">Obtain marks:</label><input type="text" name="omark" placeholder="categories name*" value="<?php echo $result['omark'] ?>"  class="form-control" id="tname" required="true"></div>
            <div class="form-group"><label  class=" form-control-label">Select Sessional:</label>
            <select class="form-control" name="session">
                <option value="<?php echo $result['session'] ?>"><?php echo $result['session'] ?></option>
                <option value="1">1St Sessional</option>
                <option value="2">2nd Sessional</option>
                <option value="3">Last Sessional</option>
                <option  value="0">other</option>
            </select></div>
            <div class="form-group"><label  class=" form-control-label">Select Type of Exam:</label>
            <select class="form-control" name="texam">
                <option value="<?php echo $result['texam'] ?>"><?php echo $result['texam'] ?></option>
                <option value="<?php echo $result['texam'] ?>">-Select-</option>
                <option value="1">Practical</option>
                <option value="2">Theory</option>
                
                <option value="0">other</option>
            </select></div>
            
            <div class="form-group"><label  class=" form-control-label">teacher:</label><input type="text" name="tname"  value="<?php echo $result['tname'] ?>" class="form-control" id="tname" required="true"></div>
            <p style="text-align: center;">
                <input type="submit" value="Submit"  name="submit">
                
            </p>
            
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
<?php }  ?>