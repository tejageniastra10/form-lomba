<?php
if($_POST["ADD"]=="add")
{
	require_once("../koneksi.php");
	$idtim1 = $_POST["idtim1"];
	$nama = $_POST["nama"];
	$usia = $_POST["usia"];
	$noktp = $_POST["noktp"];
	$fakultas = $_POST["fakultas"];

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    	$file_loc = $_FILES['file']['tmp_name'];
    	$folder="../uploads/";

 
		 // make file name in lower case
		 $new_file_name = strtolower($file);
		 // make file name in lower case
		 
  		$final_file=str_replace(' ','-',$new_file_name);

	$query=mysqli_query($konek, "SELECT idpemain FROM pemain WHERE idtim = '$idtim1'");
    $pemain = mysqli_num_rows($query);

    if($pemain < 12)
    {
    	move_uploaded_file($file_loc,$folder.$final_file);

		$tmbh_sql = 'INSERT INTO pemain (nama, usia, noktp, fakultas, file,  idtim) VALUES ("'.$nama.'", "'.$usia.'", "'.$noktp.'" , "'.$fakultas.'", "'.$final_file.'", "'.$idtim1.'")';
	    $tmbh_que = mysqli_query($konek, $tmbh_sql);
	    
	    if($tmbh_que)
	    {
	        header("location:myteam.php");    
	    }
	}
	else if($pemain == 12)
	{
		header("location:myteam.php?fail=1");
	}
}
?>
