<?php
include "../koneksi.php";

	$id = $_POST['id'];

	$update = mysqli_query($koneksi, "UPDATE tim SET id_status ='2' WHERE id_tim ='$id'") or die (mysqli_error());
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