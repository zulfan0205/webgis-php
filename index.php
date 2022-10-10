<?php
    include'_loader.php';
    if(isset($_GET['halaman'])){
        $halaman=$_GET['halaman'];
    }
    else{
        $halaman='beranda';
    }
    ob_start();
    $file='_halaman/'.$halaman.'.php';
    if(!file_exists($file)){
        include'_halaman/error.php';
    }
    else{
        include $file;
    }
    $halaman = ob_get_contents();
    ob_end_clean();
?>
<!DOCTYPE html>
<html lang ="en">
<?php include '_layouts/head.php'?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
    Include '_layouts/header.php';
    Include '_layouts/sidebar.php';
    echo $halaman;
    Include '_layouts/footer.php';
    Include '_layouts/javascript.php';
?>
</div>    
</body>    
</html>