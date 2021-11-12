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
    
    <title>Subject Result Managemet</title>
    <link rel="stylesheet" href="css/style1.css">

  </head>
  <body>
    <?php include('header.php'); ?>
    <!-- se -->
    <?php
    include("dbc1.php");
    $id=$_GET['id'];
    $query = "SELECT * FROM `result` WHERE ids='$id' ORDER BY id asc  ";
    $query1 = mysqli_query($conn , $query) or die("error");
    
    $result1= mysqli_fetch_array($query1);
    
    ?>
    <?php
    $th13=$result1['name'];
    $th14=$result1['ids'];
    $th11=$result1['texam'];
    $th12=$result1['session'];
    ?>
    <!-- data feching from student database -->
    <?php
    
    $query = "SELECT * FROM `stddata` WHERE id='$th14' ORDER BY id asc  ";
    $query1 = mysqli_query($conn , $query) or die("error");
    
    $result1= mysqli_fetch_array($query1);
    
    ?>
    <?php
    $sname=$result1['fname'];
    $lname=$result1['lname'];
    $sfather=$result1['father'];
    $sadd=$result1['address'];
    $cls=$result1['cls'];
    $roll=$result1['id'];
    ?>
    <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="subject_result_view.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Subject-Result-Show</a> </p>
      </div>
      <!-- box setup -->
      <div style="width:90%; margin-left:5%; margin-top:40px; box-shadow: 0 6px 24px 0 rgba(0, 0, 0, 0.9) ;">

    <div style="width:90%;  margin-top:40px;margin-left:5%;">
      <!--    <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?></p></div> -->
      <div style="margin-top:30px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Roorkee Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
       <h2 style="text-align:center; font-size: 20px; color:green;">
            <!-- Sessional identifier statment -->
          <?php 
          $sid=$_GET['sid'];

          switch ($sid) {
            case '1':
              echo "Frist";
              break;
               case '2':
              echo "Mid ";
              break;
               case '3':
              echo "Final";
              break;
               case '0':
              echo "Other";
              break;
            
            default:
              // code...
              break;
          }?>
          Sessional Examamination Result</h2>
        <h2 style="text-align:center; color:red;"> 2021</h2>
      </div>
       <div style="margin-top:20px; margin-left: 5%; margin-right: 5%; border: 0.1px solid gray; padding:10px; ">
        <h3><span style="font-weight:bold; color:green;">Student Full Name:</span> <?php echo $sname; ?> <?php echo $lname; ?><h3 ><span style="font-weight:bold; color:green;">Father name:</span> <?php echo $sfather; ?></h3></h3>
        <h3 ><span style="font-weight:bold; color:green;">Student Full Address:</span> <?php echo $sadd; ?></h3>
        <h3><span style="font-weight:bold; color:green;">Student Roll No.:</span> <?php echo $roll; ?></h3>
        <h3><span style="font-weight:bold; color:green;">Student Class:</span> Grade- <?php echo $cls; ?></h3>
      </div>
      <center>
      <h1 style="margin-top:10px;">Marks sheet Theory</h1></center>
      <br>
      <p style="color:#F00; padding-top:10px;" align="center"><?php echo $_SESSION['action2'];?><?php echo $_SESSION['action2']="";?></p>
      <table id="table" border="5px"
        style="text-align:center;">
        
        <tr class="bg-success container r ">
          
          
          
          <th >Subject </th>
          <th >Full_mark </th>
          <th >Pass_mark</th>
          <th >Marks </th>
          
          <th >Sessional </th>
          <th> Date</th>
          <th class="r">Result </th>
          <th  colspan="3" style="text-align:center;">action</th>
        </tr>
        <?php
        include("dbc1.php");
        error_reporting(0);
        $id=$_GET['id'];
        $sid=$_GET['sid'];
        $bid=$_GET['bid'];
        $selectquery = "SELECT * FROM `result` WHERE ids=$id and sub=$bid and texam='2' ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        $result= mysqli_fetch_array($query);
        $row=mysqli_num_rows($query);
        
        
        ?>
        <!-- data fetching  pracical-->
        <?php
        include("dbc1.php");
        error_reporting(0);
        $id=$_GET['id'];
        $sid=$_GET['sid'];
        $bid=$_GET['bid'];
        $selectquery = "SELECT * FROM `result` WHERE ids=$id and sub=$bid and texam='2' ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        
        ?>
        <?php
        $th=$result['texam'];
         $th10=$result['v_by'];
          $th11=$result['tname'];

        $th1=$result['session'];
        $th2=$result['omark'];
        $th5=$result['tmark'];
        $thst=$result['status'];
        $tmark +=$th5;
        $omark +=$th2;
        $avg=$omark/$row;
        $avgt=$tmark/$row;
        ?>
        <tr class="tr">
          
          
          
          <td class="r"><?php echo $result['subn']; ?>   </td>
          
          
          <td class="r"><?php echo $result['tmark']; ?> </td>
          <td class="r"><?php echo $result['pmark']; ?> </td>
          <td class="r"><?php echo $result['omark']; ?> </td>
          
          <!--  <td><a href="user_detail.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x"></i></a></td> -->
          <td class="r">
            <?php
            switch ($th1) {
            case '1':
            echo "1st";
            break;
            case '2':
            echo "2nd";
            break;
            case '3':
            echo "final";
            break;
            
            default:
            echo "something wrong";
            break;
            }
          ?> </td>
          <td><?php echo $result['date']; ?></td>
          <td>
              <?php if ($th2<'35') {
              echo '<p style="color: rgba(200, 0, 0, 1.0); font-weight: bold;">Fail</p>';
              // code...
              }if ($th2>'92'& $th2<'101') {
              echo '<p style="color: rgba(0, 150, 200, 2.0); font-weight: bold;">A+</p>';
              } if ($th2>'79'& $th2<'91') {
              echo '<p style="color: rgba(0, 200, 100, 1.0); font-weight: bold;">A</p>';
              }
              if ($th2>'69'& $th2<'81') {
               echo '<p style="color: rgba(0, 150, 100, 1.0); font-weight: bold;">B+</p>';
              }
              if ($th2>'59'& $th2<'71') {
               echo '<p style="color: rgba(50, 100, 0, 1.0); font-weight: bold;">B</p>';
              }
              if ($th2>'49'& $th2<'61') {
             echo '<p style="color: rgba(100, 100, 0, 1.0); font-weight: bold;">C+</p>';
              }
              if ($th2>'39'& $th2<'51') {
               echo '<p style="color: rgba(200, 50, 0, 1.0); font-weight: bold;">C</p>';
              }
              if ($th2>'35'& $th2<'41') {
              echo '<p style="color: rgba(200, 20, 0, 1.0); font-weight: bold;">D+</p>';
              }
               ?>
          </td>
          
          
          
          
          <td>
            <?php
            switch ($thst) {
            case '1':
            echo '<p style="color:#ff00ff; font-weight:bold;">Verified</>';
              break;
              case '2':
              echo '<a href="result_edit.php?id='.$result['id'].'" style=:"color:red;">Recheck</a>';
              break;
              case '0':
              echo '<a href="result_edit.php?id='.$result['id'].'">Edit</a>';
              break;
              
              default:
              echo "something wrong";
              break;
              }
              ?>
            </td>
            <td>
              <?php
              switch ($thst) {
              case '1':
              echo '<p style="color:#ff00ff; font-weight:bold;">Verified</>';
                break;
                case '2':
                echo '<a href="result_delet.php?did='.$result['id'].' & id='.$id.' & bid='.$bid.'& sid='.$sid.'" style=:"color:red;">Delete</a>';
                break;
                case '0':
                
                ?>
                <a href="result_delet.php?<?php echo 'did='.$result['id'].' & id='.$id.' & bid='.$bid.'& sid='.$sid.'' ?>" onClick="return confirm('Are you sure  to delete ?');"  >Delete</a>

                <?php
                break;
                
                default:
                echo "something wrong";
                break;
                }
                ?>
                
              </td>
              
              
              
              
            </tr>
            <?php
            # code...
            }
            ?>
            
          </table>
          <div style="margin-top:20px; margin-bottom: 200px; margin-left: 5%;">
                    <h3>Verified By: <span style="color:green;"><?php echo $th10; ?></span></h3>
                    <h3 style="padding-bottom: 100px;">Check & submited By : <span style="color:green;"><?php echo $th11; ?></span></h3>
                  </div>

          </div>
        </div>
        <?php include('footer.php'); ?>
      </body>
    </html>
    <?php }  ?>