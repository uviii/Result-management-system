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
$sql=" INSERT INTO `stddata`(`fname`, `lname`, `cls`, `father`, `address`, `pass`) VALUES ('$fname','$lname','$cls','$father','$address','$pass')";
// echo "$sql";
$data = mysqli_query($conn ,$sql);
if($data)
{
$_SESSION['action1']="weldone! A New Registration successfull ....";
header('location:student_add.php');
}
else{
$_SESSION['action1']="something gone wrong! please try again ....";
header('location:student_add.php');
}

}
?>
<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>se,estar note Add </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
  </head>
  <body>
    <?php include('header.php'); ?>
   <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="result_manage.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Result-Manage</a> </p>
      </div>
      <!-- box setup -->
    <div style="width:90%; margin-left:5%; margin-top:40px; box-shadow: 0 6px 24px 0 rgba(0, 0, 0, 0.9) ;">

    <div style="width:90%;  margin-top:40px;margin-left:5%;">
      <br>
      <div style="font-size: 20px; margin-left: 0px;  ">
        
      </div>
  
      <?php
      $id=$_GET['id'];
      $query = "SELECT * FROM `stddata` WHERE cls='$id' ORDER BY id asc  ";
      $query1 = mysqli_query($conn , $query) or die("error");
      
      $result1= mysqli_fetch_array($query1);
      
      ?>
      <?php
      $cls=$result1['cls'];
      ?>
      <div style="margin-top:20px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Roorkee Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
        <h2 style="text-align:center; font-size: 20px; color:green;">Grade  <?php echo $cls; ?>  Stutent List</h2>
        <h2 style="text-align:center; font-size: 16px; color:red;">Batch: 2021-022</h2>
      </div>
      <table id="table">
        <tr>
          <th >id</th>
          <th style="text-align:center;" >name</th>
          <th >class</th>
          <th >father </th>
          <th>Faculty</th>
          <th  colspan="2" style="text-align:center;">action</th>
          
        </tr>
        <?php
        include("dbc1.php");
        $id=$_GET['id'];
        
        $selectquery = "SELECT * FROM `stddata` where status='0' and cls=$id  ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        ?>
        <?php $stid=$result['id'];  ?>
        <tr class="tr">
          
          
          <td > <?php echo $result['id']; ?> </td>
          <td style="text-align: left;"><?php echo $result['fname']; ?> <?php echo $result['lname']; ?>  </td>
          
          <td ><?php echo $result['cls']; ?> </td>
          
          <td style="text-align: left;"><?php echo $result['father']; ?> </td>
          
          
          <!-- action start -->
          <?php
          include('dbc1.php');
          $trm=$_SESSION['trmsaid'];
          
          
          $trmquery = "SELECT * FROM `stddata` where id=$trm" ;
          $tquery = mysqli_query($conn , $trmquery) or die("error");
          
          while ($tresult= mysqli_fetch_array($tquery)) {
          
          ?>
          <?php
          $sbj=$tresult['cls'];
          $stat=$tresult['status'];
          
          ?>
          
          
          
          
          
          <td>
            <?php switch ($sbj) {
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
            case '0':
            echo "Admin";
            break;
            
            default:
            echo "No Faculty";
            break;
            } ?>
          </td>
          <td>
            <?php
            $stat=$tresult['status'];
            switch ($stat) {
            case '10':
            // code...
            echo '<a href="result_add.php?id='.$result['id'].'"><i class="fa fa-plus">add_result</i></a>';
            break;
            case '1':
            // code...
            echo '<a href="result_add.php?id='.$result['id'].'"><i class="fa fa-plus">add_result</i></a>';
            break;
            case '0':
            // code...
            echo '<a href="result_add.php?id='.$result['id'].'"><i class="fa fa-plus">Search_result</i></a>';
            break;
            
            default:
            // code...
            echo "No Faculty";
            break;
            }
            ?>
          </td>
          
          <!-- view result subject wise -->
          <?php
          if ($stat=='10') {
          ?>
          <td class="dropdown">
            <!--  <a href="result_show.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x">viw</i></a> -->
            
            <button class="dropbtn" style="border:none; font-size:16px; margin-top:0px; text-align:center; ">View-result</button>
            <div class="dropdown-content">
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=1">1st-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=2">2nd-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=3">final-sessional</a>
              <a href="result_show.php?id=<?php echo $result['id']; ?> & sid=0">other</a>
              
            </div>
            
          </td>
          <?php
          } else{?>
          <td class="dropdown">
            
            <button class="dropbtn" style="border:none; font-size:16px; margin-top:0px; text-align:center;  ">View-result</button>
            <div class="dropdown-content">
              <!-- Fetching subject from database -->
              <?php
              include('dbc1.php');
              
              $select = "SELECT * FROM `subject` where id=$sbj order by id desc ";
              $quer = mysqli_query($conn , $select) or die("error");
              
              while ($res= mysqli_fetch_array($quer)) {
              
              ?>
              
              
              
              <a href="subject_result_view.php?id=<?php echo $stid; ?> & bid=<?php echo $res['id'] ?> & sid=1"><?php echo $res['sub'] ?></a>
              
              
              
              <?php
              # code...
              }
              ?>
              
            </div>
            
          </td>
          <?php }
          ?>
          
          
          <?php
          # code...
          }
          ?>
          
          
          <!-- action end -->
          
          
          
        </tr>
        <?php
        # code...
        }
        ?>
        
      </table>
     </div>
    </div>
    <br>
    <br>
    <?php include('footer.php'); ?>
  </body>
</html>
<?php }  ?>