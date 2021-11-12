<?php
session_start();
include("dbc.php");
if(isset($_POST['login']))
{
$password=$_POST['pass'];
$name=$_POST['name'];
// check input data to data base
$selectquery = "SELECT * FROM `stddata` WHERE  fname='$name' || id='$name' and pass='$password'";
$query = mysqli_query($conn , $selectquery) or die("error");
$result= mysqli_fetch_array($query);
if($result>0)
{
$hass=$result['pass'];
$fname=$result['fname'];
$status=$result['status'];
$idl=$result['idl'];
//verifying Password
if ($password==$hass and $fname==$name|| $idl=$fname  ) {
// store input and fetch data in session
$_SESSION['fname']=$_POST['name'];
$_SESSION['lname']=$result['lname'];
$_SESSION['name']=$result['fname'];
$_SESSION['trmsaid']=$result['id'];
$_SESSION['statid']=$result['status'];
$_SESSION['bid']=$result['cls'];
// privileges user access node
// Admin
if ($status=='10') {
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
}
// teacher
if ($status=='1') {
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
}
// student
if ($status==0) {
echo "<script type='text/javascript'> document.location = 'result_search.php'; </script>";
}
// other
if ($status==2) {
header('location:index.php');
# code...
}
} else {
echo "<script>alert('Wrong information ,please contact to your admin or class teacher');</script>";
}
}
else{
echo "<script>alert('User not registered with us or you should contact your Admin or class teacher');</script>";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Login Result managment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="discription" content="  ">
    <style><?php include("css/style1.css"); ?></style>
  </head>
  <body style="overflow: hidden; background-color:gray;  background-image: url('uploade/back.jpg'); background-blend-mode:saturatio; ">
    <div class="rowcontact" style="margin-left: 30%; width:85% ; margin-top: -40px;">
      
      <!-- login input  -->
      
      <div class="clmcontact" style=" background-color: white; box-shadow:0 6px 24px 0 rgba(0, 0, 0, 0.9) ; ">
        <div class="crdcontact" >
          <div style="margin-top:0px;"> <img src="uploade/logo.jpg" style="margin-left: ;" width="80"> <h2 style="text-align:center;"> Ball Kalyan Insitute of technology</h2>
            <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
            
            <h2 style="text-align:center; color:red; font-size: 12px;" >Estd. 2021</h2>
          </div>
          <h3 style="color:green;">Login</h3>
          <div >
            <!-- form -->
            <form action="" method="post" style=" padding:10px;"  >
              <div style="margin-left:5%; margin-right:5%;">
                <label style="float:left;font-weight: bold;">User ID:</label>
                <input type="text" name="name" placeholder="Frist Name.."><br>
                <label style="float:left;font-weight: bold;">User Password:</label>
                <input type="Password"  name="pass" placeholder="Password">
                <input type="submit" name="login" value="Sign In">
                <div style="display: inline-flex;">
                  <button value="Forgate Password" style="background-color:pink; border-radius: 20px;  color: blue; width: 50%;margin-right: 150px;"><span style="padding-right:10px; margin-right:0px; margin-left:20px;">ForgetAcc</span>
                  </button>
                  <button value="Forgate Password" style="background-color:pink; border-radius: 20px;  color: blue; width: 50%;">
                  <span style="padding-right:10px; margin-right:20px; margin-left:20px;">NewRequest</span>
                  </button>
                </div>
                
              </div>
              <div style="margin-top:20px;"><h4 style="color:green;font-weight:bold;">Fllow Us In Social Media</h4>
              </div>
              <div style="display: inline-flex; margin-top:5px;">
                <a href="#"> <img src="uploade/fb.png" width="30" style="margin: 10px;"></a>
                <a href="#"> <img src="uploade/user.png" width="30" style="margin: 10px;"></a>
                <a href="#"> <img src="uploade/twt.png" width="30" style="margin: 10px;"></a>
                <a href="#"> <img src="uploade/you.png" width="30" style="margin: 10px;"></a>
                <a href="#"> <img src="uploade/logo.jpg" width="30" style="margin: 10px;"></a>
                <a href="#"> <img src="uploade/user.png" width="30" style="margin: 10px;"></a>
                
                
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>