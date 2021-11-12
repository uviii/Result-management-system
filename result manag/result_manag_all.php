<?php
session_start();
// error_reporting(0);
include("dbc1.php");
$id=$_GET['id'];
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
$sql=" INSERT INTO `stddata`(`fname`, `lname`, `cls`, `father`, `address`, `pass`) VALUES ('$fname','$lname','$cls','$father','$address','$pass')";
// echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
$_SESSION['action1']="weldone! A New categories  $cls th Grade of  created successfully ....";
header('location:student_add.php');
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
    
    <title>Manage Result | Result Management System </title>
    <link rel="stylesheet" href="css/style1.css">

  </head>
  <body>
    <?php include('header.php'); ?>
    <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="result_manage_all.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Result-Manage</a> </p>
      </div>
    <div style="width:90%; margin-left:5%; margin-top:-20px;">
      
      
      <?php
      $id=$_GET['id'];
      $query = "SELECT * FROM `stddata` WHERE cls='$id' ORDER BY id asc  ";
      $query1 = mysqli_query($conn , $query) or die("error");
      
      $result1= mysqli_fetch_array($query1);
      
      ?>
      <?php
      $cls=$result1['cls'];
      ?>
      <div style="margin-top:10px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Ball Kalyan Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
        <h2 style="text-align:center; font-size: 20px; color:green;">Grade  <?php echo $cls; ?>  Stutent Result Varification</h2>
        <h2 style="text-align:center; font-size: 16px; color:red;">Batch: 2021-022</h2>
      </div>
      <br>
      <!-- table -->
      <table id="table">
        <tr>
          <th >id</th>
          <th style="text-align:center;" >name</th>
          <th >class</th>
          <th >father </th>
          <th  colspan="2" style="text-align:center;">action</th>
          
        </tr>
        <?php
        include("dbc1.php");
        $id=$_GET['id'];
        $selectquery = "SELECT * FROM `stddata` where status='0' and cls=$id  ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        ?>
        <tr class="tr">
          
          
          <td > <?php echo $result['id']; ?> </td>
          <td style="text-align: left;"><?php echo $result['fname']; ?> <?php echo $result['lname']; ?>  </td>
          
          <td ><?php echo $result['cls']; ?> </td>
          <!--  <td><a href="user_detail.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x"></i></a></td> -->
          <td style="text-align: left;"><?php echo $result['father']; ?> </td>
          
          
          
          
          <td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash" aria-hidden="true">delete</i></a></td>
          <!-- dropdown btm -->
          <td class="dropdown">
            <button class="dropbtn" style="border:none; font-size:16px; margin-top:0px; text-align:center; ">Verification of result</button>
            <div class="dropdown-content">
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=1">1st-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=2">2nd-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=3">final-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=0">other</a>
              
            </div>
            
          </td>
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