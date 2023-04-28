<?php
$conn=mysqli_connect("localhost","root","","aj");
$re=$_GET['r'];
if(isset($re) && !empty($re))
{
	if($re=="yes")
	{
		$sql="update poll set yes=yes+1 where id='1'";
	}
	elseif($re=="no")
	{
		$sql="update poll set no=no+1 where id='1'";
	}
	mysqli_query($conn,$sql);
	$my=mysqli_query($conn,"select * from poll");
	$ft=mysqli_fetch_array($my);
	$yes=100*round(($ft['yes']/($ft['yes']+$ft['no'])),2);
	$no=100*round(($ft['no']/($ft['yes']+$ft['no'])),2);
	
	echo "yes".$yes."%&emsp;";
	echo "no".$no."%";
} 
?>