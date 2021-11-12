<?php
session_start();
// error_reporting(0);
include('dbc1.php');
  $id=$_GET['id'];
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
}  else{
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$father = $_POST['father'];
$address = $_POST['address'];
$cls = $_POST['cls'];
$pass = $_POST['pass'];

$sql="UPDATE `stddata` SET `fname`='$fname',`lname`='$lname',`cls`='$cls',`father`='$father',`pass`='$pass',`address`='$address' WHERE id=$id";
// ,`texam`='$texam',`session`='$session',`tname`='$tname',`ids`='$ids',`name`='$name'
echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
$_SESSION['actions']="weldone! A New value successfully ....";
header('location:teacher_add.php');
}
else{
  echo '<script>alert("Teacher \\\worng Detail has been added.")</script>';
// $_SESSION['actions']="something gone wrong! please try again ....";
// header('location:teacher_add.php');
}

}
?>
<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>Teacher add | Result manage </title>
    <link rel="stylesheet" href="css/style1.css">
 
  </head>
  <body>
    <?php include('header.php'); ?>
   <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="teacher_add.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Teacher-Add</a> </p>
      </div>
   
    <div style="width:93%; margin-left:3%; margin-top:40px; border:0.5px solid gray; background-color:#f2f2f2;">
      <div style="border:0.5px solid gray; padding: 15px; background-color: #e6e6e6;"><h3>Teacher <span style="font-size:10px;">Add</span></h3></div>
      <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['actions'];?></p></div>
      <br>
      <!-- data take -->
      
      <form name="" method="post" action="" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
        
        <div class="card-body card-block">
           <?php
      include('dbc1.php');
      $id=$_GET['id'];
      // echo $id;
      
      $selectquery = "SELECT * FROM `stddata` WHERE id='$id' ";
      $query = mysqli_query($conn , $selectquery) or die("error");
      
      while ($result= mysqli_fetch_array($query)) {
      
      ?>
      
      
      
       <div class="form-group"><label for="company"  class=" form-control-label">Select major subject*:</label>
          <select name="cls">
            <option value="<?php echo $result['cls'] ?>">
               <?php switch ($result['cls']) {
            case '1':
            echo "Hindi";
            break;
            case '2':
            echo "Math";
            break;
            case '3':
            echo "Science";
            break;
            case '4':
            echo "History";
            break;
            case '5':
            echo "G.K";
            break;
            case '6':
            echo "Sociology";
            break;
            case '7':
            echo "Computer";
            break;
            case '9':
            echo "economy";
            break;
            case '10':
            echo "envoronmental Science";
            break;
            
            
            default:
            echo "No subject";
            break;
            } ?>
            </option>
           
            <option value="1">Hindi</option>
            <option value="2">Math</option>
            <option value="3">Science</option>
            <option value="4">History</option>
            <option value="5">Gk</option>
            <option value="6">Sociology</option>
            <option value="7">COmputer</option>
            <option value="8">Economy</option>
            <option value="9">envornmental science</option>
            

          </select>
        </div>
        <div class="form-group"><label  class=" form-control-label">fname:</label><input type="text" name="fname" value="<?php echo $result['fname'] ?>"  required="true"></div>
        <div class="form-group"><label  class=" form-control-label">lname:</label><input type="text" name="lname" value="<?php echo $result['lname'] ?>"  required="true"></div>
        <div class="form-group"><label  class=" form-control-label">father:</label><input type="text" name="father" value="<?php echo $result['father'] ?>"  required="true"></div>
        <div class="form-group"><label  class=" form-control-label">address:</label><input type="text" name="address" value="<?php echo $result['address'] ?>"  required="true"></div>
        <div class="form-group"><label  class=" form-control-label">password:</label><input type="text" name="pass"  value="result@123" id="tname" required="true"></div>
     
      
      
      <?php
      # code...
      }
      ?>
          
         
        <input type="submit" name="submit" value="submit">
       </div>
    </form>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
<?php }  ?>