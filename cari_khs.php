<?php
    include 'koneksi.php';
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari"> 
    <input type="submit" value="Cari">
</form>
<?php
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<table border="1">
<tr>
    <th>No</th>
    <th>nim</th>
    <th>kode</th>
    <th>nilai</th>
</tr>
<?php if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="select * from khs where NIM like'%".$cari."%'";
    $tampil = mysqli_query($con,$sql);
    }else{
    $sql="select * from khs";
    $tampil = mysqli_query($con,$sql);
    }
    while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nim']; ?></td>
<td><?php echo $r['kode']; ?></td>
<td><?php echo $r['nilai']; ?></td>
</tr>
<?php } ?>
</table>