<?php 
if (!isset($_GET["sid"])) {
	echo "<script>location.href='index.php'</script>";
}
else{
	$sid=$_GET["sid"];
	include("coon.php");
	$sql="select * from tb_content where id=".$sid;
	$result=mysqli_query($lk,$sql);
	$rs=mysqli_fetch_array($result);
	$topic=$rs["topic"];
	$authoor=$rs["author"];
	$date=$rs["date"];
	$content=$rs["content"];
	$colName=$rs["colName"];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $topic; ?></title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	.bt,.info,.cnt{
		width: 700px;
		margin: 10px auto;
		border: 1px solid #ccc;
	}
	.bt{
		height: 50px;
		text-align: center;
		font: 20px/50px 微软雅黑;
	}
	.info{
		height: 30px;
		text-align: center;
		font: 14px/30px 微软雅黑;
	}
	.cnt{
		
		font: 15px/25px 微软雅黑;
	}
</style>
<body>
	<div class="bt"><?php echo  $rs["topic"];?></div>
	<div class="info"><?php echo  $rs["author"];?><?php echo  $rs["date"];?><?php echo  $rs["colName"];?></div>
	<div class="cnt"><?php echo  $rs["content"];?></div>
</body>
</html>