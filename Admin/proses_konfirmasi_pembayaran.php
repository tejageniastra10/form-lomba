<?php
include "../koneksi.php";

	$id = $_POST['id'];

	$update = mysqli_query($koneksi, "UPDATE penyelenggara SET status_penyelenggara ='3' WHERE id_penyelenggara ='$id'") or die (mysqli_error());
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