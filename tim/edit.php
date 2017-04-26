<?php
if($_POST['GANTI']=='ganti')
{  // Jike Request POST di terima
	require_once("../koneksi.php");
	$idtim1 = $_POST["idtim1"];
	$nama = $_POST["nama"];
	$usia = $_POST["usia"];
	$noktp = $_POST["noktp"];
	$fakultas = $_POST["fakultas"];
	$idpemain = $_POST["idpemain"];

	    // Query SQL untuk Update Data
    $simpan_sql = "UPDATE pemain SET nama ='".$nama."', usia ='".$usia."', noktp ='".$noktp."', fakultas ='".$fakultas."', idtim ='".$idtim1."' WHERE idpemain = '".$idpemain."'"; 
    $simpan_que = mysqli_query($konek, $simpan_sql);

    if($simpan_que)
    {
    	header("location:myteam.php");
    }
}
?>