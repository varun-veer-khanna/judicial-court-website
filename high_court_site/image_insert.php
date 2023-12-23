<?php
include('connect2.php');
$a=$_POST['t1'];
$b=$_FILES['t2']['name'];
$b1=$_FILES['t2']['tmp_name'];
if(file_exists($a)){
}
else{
	mkdir($a);
}
move_uploaded_file($b1,$a."/".$b);
	$path=$a."/".$b;
	for($i=0;$i<count($_FILES['t3']['name']);$i++){
		$c=$_FILES['t3']['name'][$i];
		$c1=$_FILES['t3']['tmp_name'][$i];
		move_uploaded_file($c1,$a."/".$c);
		$path2=$a."/".$c;
		
		mysql_query("
		insert into gallery values('','$a','$path','$path2')") or die(mysql_error());
	}
header("location:gallery.php");
?>