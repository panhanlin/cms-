<?php 
session_start();
header('Content-type:text/html;charset=utf-8');
include("coon.php");
//print_r($rs);
if(isset($_POST["lgnBtn"])){
	$uid =($_POST["uid"]);
	$pwd =md5(trim($_POST["pwd"]));
	$sql="select * from tb_user where username='$uid' and password='$pwd'";
	$result= mysqli_query($lk,$sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION["uid"] = $uid;
		$_SESSION["time"]= date("Y年m月d日");
		$_SESSION["loginok"] =1;
		echo "<script>alert('您是一个合法用户！');location.href='admin.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码错误！');location.href='login.php';</script>";
	}		
}
else{
		echo "<script>alert('您还没有登录，请登录！');location.href='login.php';</script>";
}

 ?>
