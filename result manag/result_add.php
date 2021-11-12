<?php
session_start();
// error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
if(isset($_POST['submit']))
{
$sub = $_POST['sub'];
$sub1 = $_POST['sub'];
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
$selectquery = "SELECT * FROM `subject` WHERE id='$sub1'limit 1 ";
$query = mysqli_query($conn , $selectquery) or die("error");
$result= mysqli_fetch_array($query);
$subn=$result['sub'];
$sql="INSERT INTO `result`(`sub`, `subn`, `cls`, `tmark`, `pmark`, `omark`, `texam`, `session`, `tname`, `ids`, `name`) VALUES ('$sub','$subn','$cls','$tmark','$pmark','$omark','$texam','$session','$tname','$ids','$name')";
// echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
// $_SESSION['action1']="weldone! A New categories  $cls th Grade of  created successfully ....";
echo '<script>alert("weldone! A New categories  $cls th Grade of  created successfully")</script>';
}
else{
$_SESSION['action1']="something gone wrong! please try again ....";
header('location:categories.php');
}
// header('location:registration.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>Result Add | result manage system </title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="result_add.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Result-Add</a> </p>
      </div>

   
    <div style="width:93%; margin-left:3%; margin-top:40px; border:0.5px solid gray; background-color:#f2f2f2;">
      <div style="border:0.5px solid gray; padding: 15px; background-color: #e6e6e6;"><h3>Student <span style="font-size:10px;">Add</span></h3></div>
      <!--    <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?></p></div> -->
      <br>
      <?php
      include('dbc1.php');
      $id=$_GET['id'];
      // echo $id;
      
      $selectquery = "SELECT * FROM `stddata` WHERE id='$id' order by id desc ";
      $query = mysqli_query($conn , $selectquery) or die("error");
      
      while ($result= mysqli_fetch_array($query)) {
      
      ?>
      
      
      <?php
      $ids=$result['id'];
      $name=$result['fname'];
      $lname=$result['lname'];
      
      ?>
      
      
      <?php
      # code...
      }
      ?>
      <form name="" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
        <input type="hidden" value="<?php echo $name?> <?php echo $lname?>" name="name"   ></div>
        <div class="form-group"><input type="hidden"  value="<?php echo $ids ?> " name="ids"  ></div>
        <div class="card-body card-block">
          
          <div class="form-group"><label  class=" form-control-label">Select Class*:</label>
          <select  class="form-control" name="cls">
            
            <?php
            include('dbc1.php');
            $id=$_GET['id'];
            
            $selectquery = "SELECT * FROM `stddata` where id=$id limit 1 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
            
            ?>
            
            <option value="<?php echo $result['id'] ?>">Grade- <?php echo $result['cls'] ?></option>
            
            <?php
            # code...
            }
            ?>
          </select>
        </div>
        <div class="form-group"><label for="company"  class=" form-control-label">Select major subject*:</label>
        <select class="form-control" name="sub">
          
          <?php
          include('dbc1.php');
          $sbkid=$_SESSION['bid'];
          
          $selectquery = "SELECT * FROM `subject` where id=$sbkid order by id desc ";
          $query = mysqli_query($conn , $selectquery) or die("error");
          
          while ($result= mysqli_fetch_array($query)) {
          
          ?>
          <<?php $subjectid=$result['id']; ?>
          <option value="<?php echo $result['id'] ?>"><?php echo $result['sub'] ?></option>
          
          <?php
          # code...
          }
          ?>
          
        </select>
      </div>
      <div class="form-group"><label  class=" form-control-label">Total marks:</label><input type="text" value="100" name="tmark" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
      <div class="form-group"><label  class=" form-control-label">Pass mark:</label><input type="text" name="pmark" placeholder="categories name*" value="35" class="form-control" id="tname" required="true"></div>
      <div class="form-group"><label  class=" form-control-label">Obtain marks:</label><input type="text" name="omark" placeholder="categories name*"  class="form-control" id="tname" required="true"></div>
      <div class="form-group"><label  class=" form-control-label">Select Sessional:</label>
      <select class="form-control" name="session">
        <option>-Select-</option>
        <!-- sessional Ai algorithm -->

      <!--   <?php
          include('dbc1.php');
          $sbkid=$_SESSION['bid'];
          $tid=$_SESSION['trmsaid'];
          
          $selectquery = "SELECT * FROM `result` where ids=$id and tid=$tid ";
          $query = mysqli_query($conn , $selectquery) or die("error");
          $result= mysqli_fetch_array($query);
          
          ?>
          <?php 
          $subjectid=$result['id'];
          $session=$result['session'];

           ?>
           <?php switch ($session) {
             case '1':
              echo ' <option value="2">2nd Sessional</option>';
                echo ' <option value="3">final Sessional</option>';
                echo ' <option value="0">other exam</option>';
               break;
                case '2':
                 echo ' <option value="1">1St Sessional</option>';
                   echo ' <option value="3">final Sessional</option>';
                    echo ' <option value="0">other exam</option>';
              
               break;
                case '3':
                 echo ' <option value="1">1St Sessional</option>';
                  echo ' <option value="2">2nd Sessional</option>';
                   echo ' <option value="0">other exam</option>';
             
               break;
               case '0':
                echo ' <option value="1">1St Sessional</option>';
                 echo ' <option value="2">2nd Sessional</option>';
                   echo ' <option value="3">final Sessional</option>';
               break;
             
             default:
               echo ' <option value="">other exam</option>';
               break;
           } ?>

          <option value="<?php echo $result['id'] ?>"><?php echo $result['sub'] ?></option> -->
        
        <option value="1">1St Sessional</option>
        <option value="2">2nd Sessional</option>
        <option value="3">Last Sessional</option>
        <option  value="0">other</option>
      </select></div>
      <div class="form-group"><label  class=" form-control-label">Select Type of Exam:</label>
      <select class="form-control" name="texam">
        <option>-Select-</option>
        <option value="1">Practical</option>
        <option value="2">Theory</option>
        
        <option value="0">other</option>
      </select></div>
      
      <div class="form-group"><label  class=" form-control-label">teacher:</label><input type="text" name="tname"  value="<?php echo $_SESSION['fname'];?> <?php echo $_SESSION['lname'];?>" class="form-control" id="tname" required="true"></div>
      
      
      
      
      <p style="text-align: center;">
        <input type="submit" value="Submit"  name="submit">
        
      </p>
      
    </div>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
<?php }  ?>