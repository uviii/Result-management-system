<?php
session_start();
// error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board | Result Management System</title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    
    <div>
      <div style="font-size: 20px; margin-left: 70px;  ">
        <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
        <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;"> <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="dashboard.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Dash-Board</a> </p>
      </div>
      
      
    </div>
       <div class=""><p style="color:rgba(0, 200, 0, 1.0); font-weight: bold; font-size: 25px; padding-top:20px;" align="center"><?php echo $_SESSION['fname'];?> Login Successfull..</p></div>
    <section style="background-color: rgba(0, 0, 0, 0.03); margin-right: -10px; padding-bottom: 80px; ">
      <h1 style="font-weight: bold; text-align:center; margin-top: 15px; padding-top: 40px; font-size: 40px;"> Result Management System</h1>
      <div class="horizantal">
        <?php $indo=$_SESSION['statid'];
        ?>
        <!-- student section -->
        <div class="clm">
          <div class="flex">
            <img src="uploade/logo.jpg">
            <h3>Student Section</h3>
            <p> <a href="student_add.php"> Add Student</a></p>
            <div class="dropdown" style=" margin-right: 35px;">
              <p class="dropbtn" style="border:none; font-size:16px;  text-align:center; margin-left: 20px;">Manage Student</p>
              <div class="dropdown-content">
                <a href="student_manag.php?id=<?php echo "1" ?>">Class-1</a>
                <a href="student_manag.php?id=<?php echo "2" ?>">Class-2</a>
                <a href="student_manag.php?id=<?php echo "3" ?>">Class-3</a>
                <a href="student_manag.php?id=<?php echo "4" ?>">Class-4</a>
                <a href="student_manag.php?id=<?php echo "5" ?>">Class-5</a>
                <a href="student_manag.php?id=<?php echo "6" ?>">Class-6</a>
                <a href="student_manag.php?id=<?php echo "7" ?>">Class-7</a>
                <a href="student_manag.php?id=<?php echo "8" ?>">Class-8</a>
              </div>
            </div>
          </div>
        </div>
        <!-- teacher colum -->
        <div class="clm">
          <div class="flex">
            <img src="uploade/logo.jpg">
            <h3>Teacher Section</h3>
            <?php
            if ($indo=='10') {?>
            <p> <a href="teacher_add.php"> Add Teacher</a></p>
            <p> <a href="teacher_manage.php">Manage Teacher</a></p>
            <?php
            }elseif ($indo=='1') {?>
            <p> <a href="teacher_add.php">Manage Subject</a></p>
            <p> <a href="teacher_manage.php">Manage Attendence</a></p>
            <?php
            }
            ?>
          </div>
        </div>
        
        <!-- Admin colum -->
        
        <div class="clm">
          <div class="flex">
            <img src="uploade/logo.jpg">
            <h3>Admin Section</h3>
            
            <?php
            if ($indo=='10') {?>
            <p> <a href="#">Manage Privileges</a></p>
            <p> <a href="#">User Complain</a></p>
            <?php
            }elseif ($indo=='1') {?>
            <p> <a href="#">Complain to admin</a></p>
            <p> <a href="#">Admin responses</a></p>
            <?php
            }
            ?>
          </div>
        </div>
        <!-- result colum -->
        <div class="clm">
          <div class="flex">
            <img src="uploade/logo.jpg">
            <h3>Result Section</h3>
            <!-- Privillage to admin -->
            <?php
            if ($indo=='10') {?>
            <!--
            <div class="dropdown" style=" margin-right: 35px;">
              <p class="dropbtn" style="border:none; font-size:16px; margin-top:10px; text-align:center; margin-left: 20px;">Class</p>
              <div class="dropdown-content">
                <a href="result_manage.php?id=<?php echo "1" ?>">Class-1</a>
                <a href="result_manage.php?id=<?php echo "2" ?>">Class-2</a>
                <a href="result_manage.php?id=<?php echo "3" ?>">Class-3</a>
                <a href="result_manage.php?id=<?php echo "4" ?>">Class-4</a>
                <a href="result_manage.php?id=<?php echo "5" ?>">Class-5</a>
                <a href="result_manage.php?id=<?php echo "6" ?>">Class-6</a>
                <a href="result_manage.php?id=<?php echo "7" ?>">Class-7</a>
                <a href="result_manage.php?id=<?php echo "8" ?>">Class-8</a>
                
              </div>
            </div> -->
            
            <div class="dropdown" style=" margin-right: 35px;">
              <p class="dropbtn" style="border:none; font-size:16px;  text-align:center; margin-left: 20px;">Verify Result</p>
              <div class="dropdown-content">
                <a href="result_manag_all.php?id=<?php echo "1" ?>">Class-1</a>
                <a href="result_manag_all.php?id=<?php echo "2" ?>">Class-2</a>
                <a href="result_manag_all.php?id=<?php echo "3" ?>">Class-3</a>
                <a href="result_manag_all.php?id=<?php echo "4" ?>">Class-4</a>
                <a href="result_manag_all.php?id=<?php echo "5" ?>">Class-5</a>
                <a href="result_manag_all.php?id=<?php echo "6" ?>">Class-6</a>
                <a href="result_manag_all.php?id=<?php echo "7" ?>">Class-7</a>
                <a href="result_manag_all.php?id=<?php echo "8" ?>">Class-8</a>
              </div>
            </div>
            <p>.</p>
            <!-- Previllage to teacher -->
            <?php
            }elseif ($indo=='1') {?>
            <div class="dropdown" style=" margin-right: 35px;">
              
              <p class="dropbtn" style="border:none; font-size:16px; margin-top:10px; text-align:center; margin-left: 20px;">Result Manage</p>
              <div class="dropdown-content">
                <a href="result_manage.php?id=<?php echo "1" ?>">Class-1</a>
                <a href="result_manage.php?id=<?php echo "2" ?>">Class-2</a>
                <a href="result_manage.php?id=<?php echo "3" ?>">Class-3</a>
                <a href="result_manage.php?id=<?php echo "4" ?>">Class-4</a>
                <a href="result_manage.php?id=<?php echo "5" ?>">Class-5</a>
                <a href="result_manage.php?id=<?php echo "6" ?>">Class-6</a>
                <a href="result_manage.php?id=<?php echo "7" ?>">Class-7</a>
                <a href="result_manage.php?id=<?php echo "8" ?>">Class-8</a>
                
              </div>
            </div>
            <p>.</p>
            <?php
            }
            ?>
            
            
            
          </div>
        </div>
      </div>
    </section>
    <div style="margin-top:50px;"><?php include('footer.php'); ?></div>
  </body>
</html>
<?php }  ?>