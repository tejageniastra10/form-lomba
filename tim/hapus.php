<?php
	include("session.php");
?>
<?php
if($_POST['HAPUS']=='hapus')
{
	require_once("../koneksi.php");
	$id_pemain= $_POST['id_pemain'];
	
	if($id_pemain != "")
	{  // Jika Request ID tidak = kosong maka lakukan proses
    	$hpus_sql = "DELETE FROM pemain WHERE id_pemain='".$id_pemain."'"; // SQL untuk hapus data berdasarkan IDpemain
    	$hpus_que = mysqli_query($koneksi, $hpus_sql);
    	if($hpus_que)
    	{
        	header("location:myteam.php");    // Tampilkan Pesan
    	}
	}
}
?>