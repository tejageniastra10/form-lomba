<?php
include "../koneksi.php";

	$id = $_POST['id'];
	
	

	$update = mysqli_query($koneksi, "UPDATE tim SET id_status ='2' WHERE id_tim ='$id'") or die (mysqli_error());
	
	$penyelenggara = mysqli_query($koneksi,"SELECT id_penyelenggara FROM tim WHERE id_tim='$id'") or die (mysqli_error());
	$pny= mysqli_fetch_assoc($penyelenggara);
	$id_penyelenggara= $pny['id_penyelenggara'];

	//menghitung jmlh tim terdaftrar
	$jml_tim = mysqli_query($koneksi, "SELECT * FROM tim WHERE id_penyelenggara='$id_penyelenggara' AND id_status='2'")or die (mysqli_error($koneksi));
	$tim_terdaftar=-1;
	while($jml= mysqli_fetch_assoc($jml_tim)){
	$tim_terdaftar=$tim_terdaftar+1;
		}
	$tim_terdaftar = $tim_terdaftar+1;
	mysqli_query($koneksi, "UPDATE penyelenggara SET tim_terdaftar='$tim_terdaftar' WHERE id_penyelenggara='$id_penyelenggara'") or die (mysqli_error());
	if($update)
	{
		$data['isSuccess']=true;
	}
	else
	{
		$data['isSuccess']=false;
	}
	echo json_encode($data);
?>
