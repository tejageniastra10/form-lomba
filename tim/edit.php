<?php
	include("session.php");
?>
<?php
if($_POST['ganti'])
{  // Jike Request POST di terima
	require_once("../koneksi.php");
	 $id_pemain = $_POST['id_pemain'];
	$nama_pemain = $_POST["nama_pemain"];
	$usia_pemain = $_POST["usia_pemain"];
	$alamat_pemain= $_POST["alamat_pemain"];

	    // Query SQL untuk Update Data
    $simpan_sql = "UPDATE pemain SET nama_pemain ='$nama_pemain', usia_pemain ='$usia_pemain', alamat_pemain ='$alamat_pemain' WHERE id_pemain = '$id_pemain'"; 
    $simpan_que = mysqli_query($koneksi, $simpan_sql);

    if($simpan_que)
    {
    	header("location:myteam.php");
    }
}
?>