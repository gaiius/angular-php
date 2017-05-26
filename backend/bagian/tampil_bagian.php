<?php 
include('../koneksi.php');
$query=mysql_query("select *from bagian");
$arr=array();
if(mysql_num_rows($query) !=0){
	while($row=mysql_fetch_assoc($query)){
		$arr[]=$row;
	}
}
echo json_encode($arr);