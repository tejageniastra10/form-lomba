<?php
if($_POST['HAPUS']=='hapus')
{
	require_once("../koneksi.php");
	$id_user= $_POST['id_user'];
	
	if($id_user != "")
	{  // Jika Request ID tidak = kosong maka lakukan proses
    	$hpus_sql = "DELETE FROM user WHERE id_user ='".$id_user."'"; // SQL untuk hapus data berdasarkan IDpemain
    	$hpus_que = mysqli_query($koneksi, $hpus_sql);
    	if($hpus_que)
    	{
        	header("location: data_user.php");    // Tampilkan Pesan
    	}
	}
}
?>