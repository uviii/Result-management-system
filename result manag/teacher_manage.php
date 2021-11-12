<?php
session_start();
// error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
?>
<!doctype html>
<html  lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    
    <title>Teacher & Staff Manage | Result Management System </title>
    <link rel="stylesheet" href="css/style1.css">

  </head>
  <body>
    <?php include('header.php'); ?>
   <!-- secondary nav bar -->
    
    <div style="font-size: 20px; margin-left: 70px;  ">
      <a href="dashboard.php" style="text-decoration: none; color: gray; font-weight: bold;">Dash Board</a>
      <p  style="float:right; margin-right: 85px; text-decoration: none; font-size:15px; color:gray;">
        <a href="#" style="text-decoration: none; font-weight:bold; color: rgba(0, 200, 200, 1.0);"><?php echo $_SESSION['fname'];?></a>  /  <a href="teacher_manage.php" style="text-decoration: none; color: rgba(0, 150, 0, 1.0); font-weight:bold;">Teacher-Manage</a> </p>
      </div>
    
    <div style="width:90%;  margin-top:-20px;">
     <div style="margin-top:10px;"> <img src="uploade/logo.jpg" style="margin-left: 47%;" width="80"> <h2 style="text-align:center;"> Ball Kalyan Insitute of technology</h2>
        <h2 style="text-align:center; font-size: 16px;">Puhana ,roorkee ,India</h2>
        <h2 style="text-align:center; font-size: 20px; color:green;">Teacher & College Staff Management</h2>
        <h2 style="text-align:center; font-size: 16px; color:red;">Estd: 2021-022</h2>
      </div>
      <br>
      <!-- fetch data in table -->
      <table id="table">
        <tr>
          <th >id</th>
          <th style="text-align:center;" >name</th>
          <th >Faculty_of</th>
          <th >father </th>
          <th  colspan="4" style="text-align:center;">action</th>
          
        </tr>
        <?php
        include("dbc1.php");
        $selectquery = "SELECT * FROM `stddata` where status='1'  ORDER BY id asc  ";
        $query = mysqli_query($conn , $selectquery) or die("error");
        
        while ($result= mysqli_fetch_array($query)) {
        
        ?>
        <?php 
        $subid= $result['cls'];?>
        <tr class="tr">
          
          
          <td > <?php echo $result['id']; ?> </td>
          <td style="text-align: left;"><?php echo $result['fname']; ?> <?php echo $result['lname']; ?>  </td>
          
          <td><?php switch ($subid) {
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
              echo "G.k";
              break;
              case '6':
              echo "Sociology";
              break;
              case '7':
              echo "Computer";
              break;
            
            default:
              echo "something wrong";
              break;
          } ?></td>
          <!--  <td><a href="user_detail.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x"></i></a></td> -->
          <td style="text-align: left;"><?php echo $result['father']; ?> </td>
          
          
          
          <td> <a href="res.php?id=<?php echo $result['id']; ?>">Assign</a></td>
          <td> <a href="teacher_update.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit">Edit</i></a></td>
          <td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure  to delete ?');" ><i class="fa fa-trash" aria-hidden="true">delete</i></a></td>
          <td><a href="result.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x">View</i></a></td>
          
          
          
        </tr>
        <?php
        # code...
        }
        ?>
        
      </table>
      <style>
      #table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      #table td, #table th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #table tr:nth-child(even){background-color:#d6f5f5;}
      #table tr:hover {background-color: #e6ffe6;}
      #table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color:#e600e6;
      color: white;
      }
      </style>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
<?php }  ?>