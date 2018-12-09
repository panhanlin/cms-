<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST["btnUpdate"])){
    $oldPwd=md5($_POST["oldPwd"]);
    $newPwd=md5($_POST["newPwd"]);
    $sid=$_GET["id"];
    include ("coon.php");
    $sql="select * from tb_user where id =".$sid;
    //$sql="select * from tb_user where id=$sid and password ='$oldPwd'";
    $result =mysqli_query($lk,$sql);
    $rs= mysqli_fetch_array($result);
    $pwd=$rs["password"];
    if($oldPwd<>$pwd){
        echo "<script>alert('输入的原密码不正确！');history.back();</script>";
    }
    else{
        $sql="update tb_user set password = '$newPwd' where id =".$sid;
        $result=mysqli_query($lk,$sql);
        if($result){
            echo "<script>alert('密码修改成功');location.href='listUser.php';</script>";
        }
    }
}
else{
    echo "<script>location.href='listUser.php';</script>";
}
?>
</body>
</html>