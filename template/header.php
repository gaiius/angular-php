<?php 
session_start();

?>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/JQuery/jquery.min.js"></script>
<script src="lib/angular/angular.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<center><table class="table table-bordered">
<tr>
<?php if($_SESSION['level'] =='manager'){ ?> 
    <td><a href="karyawan.php">Menu Karyawan</a></td>
	<td><a href="cuti.php">Menu Cuti</a></td>
	<td><a href="logout.php">keluar</a></td>
<?php }elseif($_SESSION['level'] =='staff'){ ?> 
	<td><a href="karyawan.php">Menu Karyawan</a></td>
	<td><a href="jabatan.php">Menu jabatan</a></td>
	<td><a href="bagian.php">Menu Bagian</a></td>
	<td><a href="cuti.php">Menu Cuti</a></td>
	<td><a href="logout.php">keluar</a></td>
<?php  }elseif($_SESSION['level'] =='karyawan'){ ?>
	<td><a href="cuti.php">Menu Cuti</a></td>
	<td><a href="logout.php">keluar</a></td>
	
<?php } ?>
</tr>

</table></center>
<h1>Halo <?php echo $_SESSION['nama'];?></h1>
<h2>Jabatan <?php echo $_SESSION['level'];?></h2>