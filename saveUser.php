<?php 
include("coon.php");
if(isset($_POST["btnSave"])){
	$uid = $_POST["uid"];
	$pwd=md5($_POST["pwd"]);
	$sql= "select * from tb_user where username = '$uid'";
    $result = mysqli_query($lk,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<script>alert('该用户名已存在！');location.href='addUser.php';</script>";
    }
    else{
        $sql="insert into tb_user (username,password) values('".$uid."','".$pwd."')";
        $result = mysqli_query($lk,$sql);
        if($result){
            echo "<script>alert('添加数据成功！');location.href='listUser.php';</script>";
        }
    }

		mysqli_close($lk);
	}

 ?>