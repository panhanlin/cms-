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
    $newName=($_POST["newName"]);
    $newAuthor=($_POST["newAuthor"]);
    $newTopic=($_POST["newTopic"]);
    $sid=$_GET["id"];
    include ("coon.php");
        $sql="update tb_content set colName = '$newName',author='$newAuthor',topic='$newTopic' where id =".$sid;
//        die($sql);
        $result=mysqli_query($lk,$sql);
        if($result){
            echo "<script>alert('数据修改成功');location.href='listContent.php';</script>";
        }

}
else{
    echo "<script>location.href='listContent.php';</script>";
}
?>
</body>
</html>