<?php
$target_dir = "../file_pengumuman/image/";
$target_file = $target_dir . date('dmY_His') . '_'. basename($_FILES["UploadFile"]["name"]);
$target_dir2 = "../file_pengumuman/document/";
$target_file2 = $target_dir2 . date('dmY_His') . '_'. basename($_FILES["UploadFile2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if ($_FILES["UploadFile"]["size"] > 3000000  ) {
    echo "Maaf, ukuran file terlalu besar.";
    $uploadOk = 0;
}
else if ($_FILES["UploadFile2"]["size"] > 3000000  ) {
    echo "Maaf, ukuran file terlalu besar.";
    $uploadOk = 0;
}



 else if($imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpg" && $_FILES['UploadFile2']['type'] != "application/pdf" && $_FILES['UploadFile2']['type'] != "application/msword"){
    echo "File Tidak Sesuai Format. format : gambar (png,jpg,gif), dokumen (doc,pdf)";
    $uploadOk = 0;
 

} else {
	echo "File :";?><br><?php 
    move_uploaded_file($_FILES["UploadFile"]["tmp_name"], $target_file);
    echo " ".basename( $_FILES["UploadFile"]["name"]);
     ?><br><?php  
    move_uploaded_file($_FILES["UploadFile2"]["tmp_name"], $target_file2);
        echo " ".basename( $_FILES["UploadFile2"]["name"]) ;
       ?><br><?php   echo " berhasil di upload.";
    
}

?>


<?php

include "../../koneksi.php";
                if(isset($_POST['add-pengumuman']))
                {
                    $id_penyelenggara               = $_POST['id_penyelenggara'];
                    $judul_pengumuman               = $_POST['judul_pengumuman'];
                    $isi_pengumuman                 = $_POST['isi_pengumuman'];
                    $tgl_pengumuman                 = $_POST['tgl_pengumuman'];

                    $file_pengumuman = $_FILES['file_pengumuman']['name'];
                    $tmp = $_FILES['file_pengumuman']['tmp_name'];
                    $filebaru = date('dmY').$file_pengumuman;
                    $path = "../file_pengumuman/".$filebaru;
                    


                    if(move_uploaded_file($tmp, $path)){
                   
                        $insert = mysqli_query($koneksi, "INSERT INTO pengumuman(id_penyelenggara,judul_pengumuman,isi_pengumuman,tgl_pengumuman,file_pengumuman) VALUES('$id_penyelenggara','$judul_pengumuman','$isi_pengumuman','$tgl_pengumuman','$filebaru')") or die(mysqli_error($koneksi));
                            if($insert)
                            {
                                header("location: ../pengumuman.php");
                            }
                   
                    
                }
                }
            ?>


