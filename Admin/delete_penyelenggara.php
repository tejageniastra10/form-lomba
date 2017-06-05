<?php
if($_POST['HAPUS']=='hapus')
{
	require_once("../koneksi.php");
	$id_penyelenggara= $_POST['id_penyelenggara'];
	
	if($id_penyelenggara != "")
	{  // Jika Request ID tidak = kosong maka lakukan proses
    	$hpus_sql = "DELETE FROM penyelenggara WHERE id_penyelenggara ='".$id_penyelenggara."'"; // SQL untuk hapus data berdasarkan IDpemain
    	$hpus_que = mysqli_query($koneksi, $hpus_sql);

    	$search_sql = "SELECT status_penyelenggara WHERE id_penyelenggara ='".$id_penyelenggara."'";


    	if($hpus_que && $search_sql= '1')
    	{
        	header("location: index.php");    // Tampilkan Pesan
    	}
    	if($hpus_que && $search_sql= '2')
    	{
    		header("location: konfirmasi_pembayaran.php");
    	}
    	if($hpus_que && $search_sql= '3')
    	{
    		header("location: data_penyelenggara.php");
    	}
	}
}
?>