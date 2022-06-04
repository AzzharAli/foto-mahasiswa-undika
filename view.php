<?php
if($_POST['jr'] == "Pilih Jurusan"){
    header('location: index.php');
    }else{
        $jurusan = $_POST['jr'];
}
if($_POST['th'] == "Pilih Tahun Masuk"){
    header('location: index.php');
    }else{
        $tahun = $_POST['th'];
    }

if($_POST['jr'] == "4101000"){
    $namaJurusan = "S1 Sistem Informasi";
}else{

}
if($_POST['jr'] == "4102000"){
    $namaJurusan = "S1 Teknik Komputer";
}else{

}
if($_POST['jr'] == "3901000"){
    $namaJurusan = "D3 Sistem Informasi";
}else{

}
if($_POST['jr'] == "4201000"){
    $namaJurusan = "S1 Desain Komunikasi Visual";
}else{

}
if($_POST['jr'] == "4202000"){
    $namaJurusan = "S1 Desain Produk";
}else{

}
if($_POST['jr'] == "5101600"){
    $namaJurusan = "D4 Produksi Film dan Televisi";
}else{

}
if($_POST['jr'] == "4302000"){
    $namaJurusan = "S1 Akuntansi";
}else{

}
if($_POST['jr'] == "4301000"){
    $namaJurusan = "S1 Manajement";
}else{

}
if($_POST['jr'] == "4303000"){
    $namaJurusan = "D3 Administrasi Perkantoran";
}else{

}


$var1 = "https://sicyca.dinamika.ac.id/static/foto/";
$var2 = 214202000;
$var3 = ".jpg";
$a = 1;
$b;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Image Viewer</title>
</head>
<body style="background-color:#000;">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-text">
      Foto dari Jurusan <?php echo $namaJurusan ?> tahun 20<?php echo $tahun ?>
    </span>
  </div>
</nav>
<div class="container">
    <?php for($b=$a;$b<=50;$b=$b+1){
        if($b<=9){
            $c='0'. $b;
            $view = $var1.$tahun.$jurusan.$c.$var3;
            
            echo "<img src='$view' width='360px'>"; 
            //echo "<br>";
        }else{
            $view = $var1.$tahun.$jurusan.$b.$var3;
            echo "<img src='$view' width='360px'>"; 
            //echo "<br>";
        }
    }
    
    ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>