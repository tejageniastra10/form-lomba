<?php
include("../koneksi.php");
$output = '';

if(isset($_POST["export_excel"]))
{
	$sql = "SELECT * FROM penyelenggara ORDER BY id_penyelenggara DESC";
	$result = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table class="table" bordered="1">
				<tr>
					<th>Nama Penyelenggara</th>
					<th>Nama Lomba</th>
					<th>Lokasi Lomba</th>
					<th>Waktu Awal Lomba</th>
					<th>Waktu Akhir Lomba</th>
					<th>Email</th>
				</tr>

			';
			while ($row = mysqli_fetch_array($result)) {
				$output .= '
					<tr>
						<td>'.$row["nama_penyelenggara"].'</td>
						<td>'.$row["nama_lomba"].'</td>
						<td>'.$row["lokasi_lomba"].'</td>
						<td>'.$row["waktu_awal_lomba"].'</td>
						<td>'.$row["waktu_akhir_lomba"].'</td>
						<td>'.$row["email_penyelenggara"].'</td>
					</tr>
				';
			}
			$output .= '</table>';
			header("Content-Type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=download.xls");
			echo $output;
	}
}

?>