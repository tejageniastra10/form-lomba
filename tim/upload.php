<?php
require_once('../koneksi.php');
if(isset($_POST['btn-upload']))
{    
  $idpemain = $_POST['id_pemain'];
     
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="../uploads/";

 
 // make file name in lower case
  $new_file_name = strtolower($file);
 // make file name in lower case
 
  $final_file=str_replace(' ','-',$new_file_name);
 
 
    move_uploaded_file($file_loc,$folder.$final_file);
    $sql= "UPDATE pemain SET file = '$final_file' WHERE id_pemain = '$id_pemain'";
    $result = mysqli_query($koneksi, $sql);
   
    if($result)
    {
      header("location:myteam.php");
    }
}
?>