<?php
session_start();
error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
?>
<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>Student Manage || Result Management </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
  </head>
  <body>
    <?php include('header.php'); ?>
    <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="student_manag.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Student-Manage</a> </p>
      </div>
      
      
    </div>
    
    <div style="width:90%; margin-left:5%; margin-top:0px;">
      <!-- data feching from student database for grade-->
      <?php
      $id=$_GET['id'];
      $query = "SELECT * FROM `stddata` WHERE cls='$id' ORDER BY id asc  ";
      $query1 = mysqli_query($conn , $query) or die("error");
      
      $result1= mysqli_fetch_array($query1);
      
      ?>
      <?php
      $cls=$result1['cls'];
      ?>
      <div style="margin-top:10px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Roorkee Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
        <h2 style="text-align:center; font-size: 20px; color:green;">Grade  <?php echo $cls; ?>  Stutent List</h2>
        <h2 style="text-align:center; font-size: 16px; color:red;">Batch: 2021-022</h2>
      </div>
      <br>
      <div class=""><p style="color:red; padding-top:20px;" align="center"><?php echo $_SESSION['actiondelet'];?></p></div>
       <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['student'];?></p></div>
      <!-- data fetch in table view -->
      <table id="table">
        <!-- table heading row -->
        <tr>
          <th >Roll NO.</th>
          <th style="text-align:center;" >Full Name</th>
          <th >Class</th>
          <th >Father's Name </th>
          <th  colspan="2" style="text-align:center;">action</th>
          
        </tr>
        <!-- table value row -->
        <?php
        include("dbc1.php");
        $id=$_GET['id'];
        $selectquery = "SELECT * FROM `stddata` where status='0' and cls=$id ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        ?>
        <tr>
          <td > <?php echo $result['id']; ?> </td>
          <td style="text-align: left;"><?php echo $result['fname']; ?> <?php echo $result['lname']; ?>  </td>
          <td ><?php echo $result['cls']; ?> </td>
          <td style="text-align: left;"><?php echo $result['father']; ?> </td>
          <td> <a href="student_update.php?cid=<?php echo $result['id']; ?> & id=<?php echo $id ?>"> <i class="fa fa-edit">Update</i></a></td>
          <td> <a href="student_delet.php?cid=<?php echo $result['id']; ?> & id=<?php echo $id ?>" title="delete" onClick="return confirm('Are you sure  to delete ?');" ><i class="fa fa-trash" aria-hidden="true">delete</i></a></td>
        </tr>
        <?php
        # code...
        }
        ?>
        
      </table>
     
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
<?php }  ?>