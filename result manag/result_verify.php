<?php
session_start();
// error_reporting(0);
include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
header('location:logout.php');
} else{
if (isset($_GET['vid'])) {
# code...
$vi=$_GET['vid'];
$id=$_GET['id'];
$sid=$_GET['sid'];
$tr=$_SESSION['fname'];
// echo $sid;
$sql="UPDATE `result` SET `status`='1',`v_by`='$tr' WHERE id='$vi'";
echo "$sql";
$query = mysqli_query($conn ,$sql);
if ($query) {
$_SESSION['action']="weldone!  Reusult approved..........";
header('location:result_show.php?id='.$id.' && sid='.$sid.'');
}else{
echo '<script>alert("Result not Varified try again later.")</script>';
}
}else{
echo '<script>alert("Something going wrong.")</script>';
}
?>
<?php }  ?>