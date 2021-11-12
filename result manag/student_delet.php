<?php
session_start();
// error_reporting(0);

include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
  header('location:logout.php');
  } else{

if (isset($_GET['cid'])) {
  # code...
  
   $cid=$_GET['cid'];
    $id=$_GET['id'];
$deletequery = "DELETE FROM `stddata` WHERE id=$cid";
$query= mysqli_query($conn,$deletequery);


if ($query) {
$_SESSION['actiondelet']="Requisted Data Deleted Successfuly..........";
     header('location:student_manag.php?id='.$id.'');
}else{
 echo '<script>alert("not deleted try again later.")</script>';

}


}else{
    echo '<script>alert("Something going wrong.")</script>';
}
?>

<?php }  ?>

           









