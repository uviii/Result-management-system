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
    
    <title>Result Search </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
  </head>
  <body>
   <!-- heading -->
   <div class="nav"  >
    <div class="logo" style="font-size: 20px; margin-left: -10px;">
        <a href="#"><img src="uploade/logo.jpg" width="40">
            <!--   <img src="images/logo.png" width="80"> -->
        </a>
    </div>
    <div class="logo" style="font-size: 20px; margin-left: -700px; margin-top: 10px;">
        <a href="#"> <p style="font-size:23px;">Ball Kalyan Institute Of Technology</p></a>
    </div>
    <ul class='navbar' style="margin-right: -50px;">
        <li class="dropdown" style=" margin-right: 35px;">
            
            <img src="uploade/user.png" width="40" class="dropbtn">
            <div class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
</div>
<style>
.dropbtn {
cursor: pointer;
color: black;
padding: -20px;
}
.dropdown {
position: relative;
display: inline-block;
}
.dropdown-content {
display: none;
font-size: 12px;
position: absolute;
background-color: #f9f9f9;
width: 150px;
box-shadow: 2px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown-content a {
color: black;
padding: 1px 1px;
text-decoration: none;
display: block;
}
.dropdown-content a:hover {background-color: gray;}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbtn {
background-color: gray; 
border-radius: 30px;
color: white;
}
</style>
</li>
</ul>
</div>
<br>
    
    
    <style >
    input[type=text], input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;;
    box-sizing: border-box;
    }
    input[type=submit] {
    width: 100%;
    background-color: green;
    color: white;
    font-weight: bold;
    padding: 15px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    }
    input[type=submit]:hover {
    background-color: blue;
    }
    </style>
    <div style="width:93%; margin-left:3%; margin-top:40px; border:0.5px solid gray; background-color:#f2f2f2;">
      <div style="border:0.5px solid gray; padding: 15px; background-color: #e6e6e6;"><h3>Student <span style="font-size:10px;">Add</span></h3></div>
      <div class=""><p style="color:green; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?></p></div>
      <br>
      <form  method="post" action="result_search_view.php" enctype="multipart/form-data" style="margin-left:2%; margin-right:2%;">
        
        <div class="card-body card-block">
          
          <div class="form-group"><label for="company"  class=" form-control-label">Select Class*:</label>
          <select class="form-control" name="cls">
            <option value="<?php echo $_SESSION['bid']; ?>"><?php echo $_SESSION['bid']; ?></option>
            <option value="1">Grade-1</option>
            <option value="2">Grade-2</option>
            <option value="3">Grade-3</option>
            <option value="4">Grade-4</option>
            <option value="5">Grade-5</option>
            <option value="6">Grade-6</option>
            <option value="7">Grade-7</option>
            <option value="8">Grade-8</option>
          </select>
        </div>
        <div class="form-group"><label  class=" form-control-label">Frist Name:</label><input type="text" name="fname" placeholder="categories name*"  value="<?php echo $_SESSION['name']; ?>" class="form-control" id="tname" required="true"></div>
        <div class="form-group"><label  class=" form-control-label">Roll No:</label><input type="text" name="roll" placeholder="categories name*"  class="form-control" id="tname" required="true" value="<?php echo $_SESSION['trmsaid'] ?>"></div>
        
        <br>
        
        
        <input type="submit" value="submit" name="submit">
        
        
      </div>
    </form>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
<?php }  ?>