<?php
session_start();
// error_reporting(0);

include('dbc1.php');
if (strlen($_SESSION['trmsaid']==0)) {
  header('location:logout.php');
  } else{

if (isset($_GET['did'])) {
  # code...
  $vi=$_GET['did'];
   $bid=$_GET['bid'];
    $id=$_GET['id'];
    $sid=$_GET['sid'];
    $tr=$_SESSION['fname'];
$deletequery = "DELETE FROM `result` WHERE id=$vi";
$query= mysqli_query($conn,$deletequery);


if ($query) {
$_SESSION['action2']="Requisted Data Deleted Successfuly..........";
     header('location:subject_result_view.php?bid='.$bid.' && id='.$id.' && sid='.$sid.'');
}else{
 echo '<script>alert("Result not Varified try again later.")</script>';

}


}else{
    echo '<script>alert("Something going wrong.")</script>';
}
?>

<?php }  ?>

           









