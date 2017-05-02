
<?php
	include "koneksi.php";


$id_kategori="select * from penyelenggara where id_kategori='".$_POST['kat_id']."'";
$q=mysqli_query($koneksi,$id_kategori);
?><option value="">Pilih penyelenggara</option><?php
while($data_penyelenggara=mysqli_fetch_array($q)){
	?>
	<option value="<?php echo $data_penyelenggara['id_penyelenggara'];?>"><?php echo $data_penyelenggara['nama_penyelenggara'];?></option>
	<?php
}

?>