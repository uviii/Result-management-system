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
    
    <title>Result Show | result managemt </title>
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
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="result_show.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Result-Show</a> </p>
      </div>
      <!-- box setup -->
      <div style="width:90%; margin-left:5%; margin-top:40px; box-shadow: 0 6px 24px 0 rgba(0, 0, 0, 0.9) ;; border:0.1px solid gray;">
        <div style="margin-top:30px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Ball Kalyan Insitute of technology</h2>
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
          <h2 style="text-align:center; color:red;"> 2021-2022</h2>
        </div>
        <div style="margin-top:20px; margin-left: 5%; margin-right: 5%; border: 0.1px solid gray; padding:10px; ">
          <h3><span style="font-weight:bold; color:green;">Student Full Name:</span> <?php echo $sname; ?> <?php echo $lname; ?><h3 ><span style="font-weight:bold; color:green;">Father name:</span> <?php echo $sfather; ?></h3></h3>
          <h3 ><span style="font-weight:bold; color:green;">Student Full Address:</span> <?php echo $sadd; ?></h3>
          <h3><span style="font-weight:bold; color:green;">Student Roll No.:</span> <?php echo $roll; ?></h3>
          <h3><span style="font-weight:bold; color:green;">Student Class:</span> Grade- <?php echo $cls; ?></h3>
        </div>
        <center>
        <h1 style="margin-top:20px; color: rgba(0, 200, 0, 1.0);">Marks sheet -Theory</h1></center>
        <br>
        <p style="color:#F00;" align="center"><?php echo $_SESSION['action'];?><?php echo $_SESSION['action']="";?></p>
        <table id="table" border="1px"style="text-align:center;  ">
          
          <tr>
            <th>Subject </th>
            <th>Full_mark </th>
            <th>Pass_mark</th>
            <th>Marks </th>
            <th>Exam </th>
            <th>Result </th>
            <th> Status</th>
            <th  colspan="3" style="text-align:center;">action</th>
          </tr>
          <?php
          include("dbc1.php");
          $id=$_GET['id'];
          $sid=$_GET['sid'];
          $selectquery = "SELECT * FROM `result` WHERE ids=$id and session=$sid and texam='2' ORDER BY id asc  ";
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
          $selectquery = "SELECT * FROM `result` WHERE ids=$id and session=$sid and texam='2' ORDER BY id asc  ";
          $query = mysqli_query($conn , $selectquery) or die("error");
          
          while ($result= mysqli_fetch_array($query)) {
          
          
          ?>
          <?php
          $th=$result['texam'];
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
          <tr>
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
            
            
            <td style="color">
              <?php
              
              switch ($th6) {
              case '1':
              echo '<p style="color:green; font-weight:bold;">Verified</>';
                break;
                case '0':
                echo '<p style="color:red; font-weight:bold;">Not Verified</>';
                  break;
                  case '2':
                  echo '<p style="color:#ff00ff; font-weight:bold;">Rejected</>';
                    break;
                    
                    default:
                    // code...
                    break;
                    }
                  ?></td>
                  
                  <td> <a href="result_verify.php?vid=<?php echo $result['id']; ?> & id=<?php echo $id; ?> & sid=<?php echo $sid; ?>">
                  Accept</a></td>
                  <td> <a href="result_reject.php?vid=<?php echo $result['id']; ?> & id=<?php echo $id; ?> & sid=<?php echo $sid; ?>">
                  Reject</a></td>
                  
                  
                  
                  <?php
                  # code...
                  }
                  ?>
                  <tr><td colspan="8"></td>.</tr>
                  <tr>
                    <td>Mean-Marks</td>
                    <td><?php echo $avgt ?></td>
                    <td>35</td>
                    <td><?php echo $avg ?></td>
                    <td>Theory</td>
                    <td>
                      <?php if ($avg<'35') {
                      echo '<p style="color: rgba(200, 0, 0, 1.0); font-weight: bold;">Fail</p>';
                      // code...
                      }if ($avg>'92'& $avg<'101') {
                      echo '<p style="color: rgba(0, 150, 200, 2.0); font-weight: bold;">A+</p>';
                      } if ($avg>'79'& $avg<'91') {
                      echo '<p style="color: rgba(0, 200, 100, 1.0); font-weight: bold;">A</p>';
                      }
                      if ($avg>'69'& $avg<'81') {
                      echo '<p style="color: rgba(0, 150, 100, 1.0); font-weight: bold;">B+</p>';
                      }
                      if ($avg>'59'& $avg<'71') {
                      echo '<p style="color: rgba(50, 100, 0, 1.0); font-weight: bold;">B</p>';
                      }
                      if ($avg>'49'& $avg<'61') {
                      echo '<p style="color: rgba(100, 100, 0, 1.0); font-weight: bold;">C+</p>';
                      }
                      if ($avg>'39'& $avg<'51') {
                      echo '<p style="color: rgba(200, 50, 0, 1.0); font-weight: bold;">C</p>';
                      }
                      if ($avg>'35'& $avg<'41') {
                      echo '<p style="color: rgba(200, 20, 0, 1.0); font-weight: bold;">D+</p>';
                      }
                      ?>
                    </td>
                    <td colspan="3">
                      
                      <?php if ($avg<'35') {
                      echo '<p style="color: rgba(200, 0, 0, 1.0); font-weight: bold;">Fail</p>';
                      // code...
                      }if ($avg>'92'& $avg<'101') {
                      echo '<p style="color: rgba(0, 150, 200, 2.0); font-weight: bold;">Extra ordinary</p>';
                      } if ($avg>'79'& $avg<'91') {
                      echo '<p style="color: rgba(0, 200, 100, 1.0); font-weight: bold;">Excelent</p>';
                      }
                      if ($avg>'69'& $avg<'81') {
                      echo '<p style="color: rgba(0, 150, 100, 1.0); font-weight: bold;"> Very Good</p>';
                      }
                      if ($avg>'59'& $avg<'71') {
                      echo '<p style="color: rgba(50, 100, 0, 1.0); font-weight: bold;">Very Good </p>';
                      }
                      if ($avg>'49'& $avg<'61') {
                      echo '<p style="color: rgba(100, 100, 0, 1.0); font-weight: bold;">Not Bad ! Read More</p>';
                      }
                      if ($avg>'39'& $avg<'51') {
                      echo '<p style="color: rgba(200, 50, 0, 1.0); font-weight: bold;">Its Ok! Read More</p>';
                      }
                      if ($avg>'35'& $avg<'41') {
                      echo '<p style="color: rgba(200, 20, 0, 1.0); font-weight: bold;">Bad ! Read More</p>';
                      }
                      ?>
                    </td>
                    
                  </tr>
                </table>
                <div style="margin-top:20px; margin-left: 20%;">
                  <h3>Verified By: <span style="color:green;"><?php echo $th10; ?></span></h3>
                  <h3>Check & submited By : <span style="color:green;"><?php echo $th11; ?></span></h3>
                </div>
                
                <!-- practcal markshit -->
                <br>
                <!--
                <center>
                <h1 style="margin-top:30px;">Marks sheet Practical</h1></center>
                <table id="table" border="5px"
                  style="text-align:center;">
                  
                  <tr>
                    
                    
                    
                    <th>Subject </th>
                    <th>Full_mark </th>
                    <th>Pass_mark</th>
                    <th>Marks </th>
                    
                    <th>Exam </th>
                    <th>Result </th>
                    <th>status</th>
                    <th  colspan="2" style="text-align:center;">action</th>
                  </tr>
                  <?php
                  include("dbc1.php");
                  $id=$_GET['id'];
                  $sid=$_GET['sid'];
                  $selectquery = "SELECT * FROM `result` WHERE ids=$id and session=$sid and texam='1' ORDER BY id asc  ";
                  $query = mysqli_query($conn , $selectquery) or die("error");
                  
                  while ($result= mysqli_fetch_array($query)) {
                  
                  ?>
                  <?php
                  $th=$result['texam'];
                  $th1=$result['session'];
                  $th2=$result['omark'];
                  $th9=$result['status'];
                  ?>
                  <tr>
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
                    
                    <td style="color">
                      <?php
                      
                      switch ($th9) {
                      case '1':
                      echo '<p style="color:green; font-weight:bold;">Verified</>';
                        break;
                        case '0':
                        echo '<p style="color:red; font-weight:bold;">Not Verified</>';
                          break;
                          case '2':
                          echo '<p style="color:#ff00ff; font-weight:bold;">Rejected</>';
                            break;
                            
                            default:
                            // code...
                            break;
                            }
                          ?></td>
                          
                          <td> <a href="result_verify.php?vid=<?php echo $result['id']; ?> & id=<?php echo $id; ?> & sid=<?php echo $sid; ?>">
                          Accept</a></td>
                          <td> <a href="result_reject.php?vid=<?php echo $result['id']; ?> & id=<?php echo $id; ?> & sid=<?php echo $sid; ?>">
                          Reject</a></td>
                          
                          
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
                    <!-- <div style="margin-top:100px; margin-left: 30%;">
                      <h3>Verified By: <?php echo $th10; ?></h3>
                      <h3>Check & submited By : <?php echo $th11; ?></h3>
                    </div> -->
                    <?php include('footer.php'); ?>
                  </body>
                </html>
                <?php }  ?>