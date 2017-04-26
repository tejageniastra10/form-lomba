<?php
if($_POST["ADD"]=="add")
{
	require_once("../koneksi.php");
	$idtim1 = $_POST["id_tim1"];
	$nama = $_POST["nama_pemain"];
	$usia = $_POST["usia_pemain"];

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    	$file_loc = $_FILES['file']['tmp_name'];
    	$folder="../uploads/";

 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
  		$final_file=str_replace(' ','-',$new_file_name);

	$query=mysqli_query($koneksi, "SELECT id_pemain FROM pemain WHERE id_tim = '$id_tim1'");
    $pemain = mysqli_num_rows($query);

    if($pemain < 12)
    {
    	move_uploaded_file($file_loc,$folder.$final_file);

		$tmbh_sql = 'INSERT INTO pemain (nama_pemain, usia_pemain, id_tim) VALUES ("'.$nama_pemain.'", "'.$usia_pemain.'", "'.$final_file.'", "'.$id_tim1.'")';
	    $tmbh_que = mysqli_query($koneksi, $tmbh_sql);
	    
	    if($tmbh_que)
	    {
	        header("location:myteam.php");    
	    }
	}
	else if($pemain == 16)
	{
		header("location:myteam.php?fail=1");
	}
}
?>
