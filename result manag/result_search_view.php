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
$id = $_POST['roll'];
$cls = $_POST['cls'];
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>Result Search View | Result management system </title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <!-- se -->
    <?php
    include("dbc1.php");
    error_reporting(0);
    $query = "SELECT * FROM `stddata` where  id=$id and cls=$cls";
    $query1 = mysqli_query($conn , $query) or die("error");
    
    $result1= mysqli_fetch_array($query1);
    if ($result1>0) {
    // code...
    $class=$result1['cls'];
    $lnm=$result1['lname'];
    $thid=$result1['id'];
    }if ($id==$thid and $cls==$class) {?>
    
    <?php
    include("dbc1.php");
    
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
   
<!-- box setup -->
    <div style="width:90%; margin-left:5%; margin-top:40px; box-shadow: 0 6px 24px 0 rgba(0, 0, 0, 0.9) ;">


      <div style="margin-top:30px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Ball Kalyan Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
        <h2 style="text-align:center; font-size: 20px; color:green;">
        <?php if ($th12===1) {
        echo "1st";
        // code...
        }if ($th12===2) {
        echo "2nd";
        }   else {echo "Final";} ?>
        sessional examamination</h2>
        <h2 style="text-align:center; color:red;"> 2021</h2>
      </div>
       <div style="margin-top:20px; margin-left: 5%; margin-right: 5%; border: 0.1px solid gray; padding:10px; ">
          <h3><span style="font-weight:bold; color:green;">Student Full Name:</span> <?php echo $sname; ?> <?php echo $lname; ?><h3 ><span style="font-weight:bold; color:green;">Father name:</span> <?php echo $sfather; ?></h3></h3>
          <h3 ><span style="font-weight:bold; color:green;">Student Full Address:</span> <?php echo $sadd; ?></h3>
          <h3><span style="font-weight:bold; color:green;">Student Roll No.:</span> <?php echo $roll; ?></h3>
          <h3><span style="font-weight:bold; color:green;">Student Class:</span> Grade- <?php echo $cls; ?></h3>
        </div>
      <center>
      <h1 style="margin-top:30px;">Marks sheet Theory</h1></center>
      <br>
      <table id="table" border="1px"
        style="text-align:center;">
        
        <tr class="bg-success container r ">
          
          
          
          <th>Subject </th>
          <th>Full_mark </th>
          <th>Pass_mark</th>
          <th>Marks </th>
          
          <th>Exam </th>
          <th>Result </th>
          <th  colspan="3" style="text-align:center;">status</th>
        </tr>
        <?php
        include("dbc1.php");
        error_reporting(0);
        
        
        $selectquery = "SELECT * FROM `result` WHERE ids=$id and session='1' and texam='2'and status='1' ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        $result= mysqli_fetch_array($query);
        $row=mysqli_num_rows($query);
        
        
        ?>
        <!-- data fetching  pracical-->
        <?php
        include("dbc1.php");
        error_reporting(0);
        
        
        $selectquery = "SELECT * FROM `result` WHERE ids=$id and session='1' and texam='2'and status='1' ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        
        ?>
        <?php
       $th=$result['texam'];
       $thst=$result['status'];
          $th1=$result['session'];
          $th2=$result['omark'];
          $th5=$result['tmark'];
          $th6=$result['status'];
          $th10=$result['v_by'];
          $th11=$result['tname'];
          $tmark +=$th5;
          $omark +=$th2;
          $avg=$omark/$row;
          $avgt=$tmark/$row;
        ?>
        <tr class="tr">
          
          
          
          <td><?php echo $result['subn']; ?>   </td>
          
          
          <td><?php echo $result['tmark']; ?> </td>
          <td><?php echo $result['pmark']; ?> </td>
          <td><?php echo $result['omark']; ?> </td>
          
          <!--  <td><a href="user_detail.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x"></i></a></td> -->
          <td>
            <?php if ($th==='1') {
            echo "Practical";
            // code...
            }if ($th==='2') {
            echo "Theory";
          }   else {echo "Other";} ?></td>
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
          
          
          
          
          <td>  <?php
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
              ?></td>
         
          
          
          
          
        </tr>
        <?php
        # code...
        }
        ?>
       <tr><td colspan="8"></td>.</tr>
                <tr>
                  <td>Mean-Marks</td>
            
                  <td><?php echo  $avgt ?></td>
                  <td>35</td>
                  <td><?php echo number_format($avg) ?></td>
                  <td>Theory</td>
                   <td>
                       <?php if ($avgt<'35') {
              echo '<p style="color: rgba(200, 0, 0, 1.0); font-weight: bold;">Fail</p>';
              // code...
              }if ($avgt>'92'& $avgt<'101') {
              echo '<p style="color: rgba(0, 150, 200, 2.0); font-weight: bold;">A+</p>';
              } if ($avgt>'79'& $avgt<'91') {
              echo '<p style="color: rgba(0, 200, 100, 1.0); font-weight: bold;">A</p>';
              }
              if ($avgt>'69'& $avgt<'81') {
               echo '<p style="color: rgba(0, 150, 100, 1.0); font-weight: bold;">B+</p>';
              }
              if ($avgt>'59'& $avgt<'71') {
               echo '<p style="color: rgba(50, 100, 0, 1.0); font-weight: bold;">B</p>';
              }
              if ($avgt>'49'& $avgt<'61') {
             echo '<p style="color: rgba(100, 100, 0, 1.0); font-weight: bold;">C+</p>';
              }
              if ($avgt>'39'& $avgt<'51') {
               echo '<p style="color: rgba(200, 50, 0, 1.0); font-weight: bold;">C</p>';
              }
              if ($avgt>'35'& $avgt<'41') {
              echo '<p style="color: rgba(200, 20, 0, 1.0); font-weight: bold;">D+</p>';
              }
               ?>
                   </td>
                  <td colspan="3">
                    
                     <?php if ($avgt<'35') {
              echo '<p style="color: rgba(200, 0, 0, 1.0); font-weight: bold;">Fail</p>';
              // code...
              }if ($avgt>'92'& $avgt<'101') {
              echo '<p style="color: rgba(0, 150, 200, 2.0); font-weight: bold;">Extra ordinary</p>';
              } if ($avgt>'79'& $avgt<'91') {
              echo '<p style="color: rgba(0, 200, 100, 1.0); font-weight: bold;">Excelent</p>';
              }
              if ($avgt>'69'& $avgt<'81') {
               echo '<p style="color: rgba(0, 150, 100, 1.0); font-weight: bold;"> Very Good</p>';
              }
              if ($avgt>'59'& $avgt<'71') {
               echo '<p style="color: rgba(50, 100, 0, 1.0); font-weight: bold;">Very Good </p>';
              }
              if ($avgt>'49'& $avgt<'61') {
             echo '<p style="color: rgba(100, 100, 0, 1.0); font-weight: bold;">Not Bad ! Read More</p>';
              }
              if ($avgt>'39'& $avgt<'51') {
               echo '<p style="color: rgba(200, 50, 0, 1.0); font-weight: bold;">Its Ok! Read More</p>';
              }
              if ($avgt>'35'& $avgt<'41') {
              echo '<p style="color: rgba(200, 20, 0, 1.0); font-weight: bold;">Bad ! Read More</p>';
              }
               ?>
                  </td>
                
                </tr>

      </table>
      <div style="margin-top:20px; margin-left: 5%;">
                    <h3>Verified By: <span style="color:green;"><?php echo $th10; ?></span></h3>
                    <h3 style="padding-bottom: 20px;">Check & submited By : <span style="color:green;"><?php echo $th11; ?></span></h3>

                  </div>
                  <div style="text-align:center; padding-bottom:30px"> <a  onclick="window.print()" style="font-size:30px; color: white; background-color:black; border-radius: 20px; padding:10px;">Print Result</a></div>
              




              <!-- Practical file -->
     <!--  <center>
      <h1 style="margin-top:30px;">Marks sheet Practical</h1></center>
      <br>
      <table id="table" border="5px"
        style="text-align:center;">
        
        <tr class="bg-success container r ">
          
          
          
          <th>Subject </th>
          <th>Full_mark </th>
          <th>Pass_mark</th>
          <th>Marks </th>
          
          <th>Exam </th>
          <th>Result </th>
          <th  colspan="3" style="text-align:center;">action</th>
        </tr>
        <?php
        include("dbc1.php");
        
        
        $selectquery = "SELECT * FROM `result` WHERE ids=$id and session='1''' and texam='1' ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        ?>
        <?php
        $th=$result['texam'];
        $th1=$result['session'];
        $th2=$result['omark'];
        ?>
        <tr class="tr">
          
          
          
          <td><?php echo $result['subn']; ?>   </td>
          
          
          <td><?php echo $result['tmark']; ?> </td>
          <td><?php echo $result['pmark']; ?> </td>
          <td><?php echo $result['omark']; ?> </td>
          <td>
            <?php if ($th==='1') {
            echo "Practical";
            // code...
            }if ($th==='2') {
            echo "Theory";
          }   else {echo "Other";} ?></td>
          <td>
            <?php if ($th2<'35') {
            echo "Fail";
            // code...
            }if ($th2>'89'& $th2<'101') {
            echo "Pass-A+";
            } if ($th2>'79'& $th2<'91') {
            echo "Pass/A";
            }
            if ($th2>'69'& $th2<'81') {
            echo "Pass/B+";
            }
            if ($th2>'59'& $th2<'71') {
            echo "Pass/B";
            }
            if ($th2>'49'& $th2<'61') {
            echo "Pass/C+";
            }
            if ($th2>'39'& $th2<'51') {
            echo "Pass/C";
            }
            if ($th2>'35'& $th2<'41') {
            echo "Pass/D+";
            }
            else {echo "--";} ?>
          </td>
          
          
          
          
          <td> <a href="user_update_text.php?id=<?php echo $result['id']; ?>"> edit</a></td>
          <td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash" aria-hidden="true"></i> delete</a></td>
          
          
          
          
        </tr>
        <?php
        # code...
        }
        ?>
        <tr><td></td></tr>
        <tr>
          <td>Total</td>
          <td>500</td>
          <td>35</td>
          <td>400</td>
          <td>practival</td>
          <td>A+</td>
          <td>a</td>
          <td>sugestion</td>
        </tr>
      </table> -->
   </div>
    </div>
    <br><br><br><br>
    <?php include('footer.php'); ?>
    
    
    <?php }else{ ?>
    <!-- else content here -->
    <div style="">
      <div style="margin-left: 40%; "><h1 style="color:red; font-size:40px; margin-bottom: 40px;">Worng Information !</h1></div>
      <div  style="margin-left: 20%;"><h1>Please Contact Your Class Teacher and try again latter </h1></div>
    </div>
    <?php } ?>

  </body>
</html>
<?php }  ?>