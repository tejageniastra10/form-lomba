<?php
if($_POST['HAPUS']=='hapus')
	require_once("../koneksi.php");
	$idpemain = $_POST["idpemain"];
	
	if($idpemain != "")
	{  // Jika Request ID tidak = kosong maka lakukan proses
    	$hpus_sql = "DELETE FROM pemain WHERE idpemain='".$idpemain."'"; // SQL untuk hapus data berdasarkan IDpemain
    	$hpus_que = mysqli_query($konek, $hpus_sql);
    	if($hpus_que)
    	{
        	header("location:myteam.php");    // Tampilkan Pesan
    	}
	}
?>