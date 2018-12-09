<?php
include ("coon.php");
date_default_timezone_set("prc");
if (isset($_POST["btnSave"])){
    $topic=$_POST["topic"];
    $author=$_POST["author"];
    $colName=$_POST["column"];
    $content=$_POST["content"];
    $date=date('Y-m-d');
    $sql="insert into tb_content (topic,author,colName,content,date) values ('".$topic."','".$author."','".$colName."','".$content."','".$date."')";
//    die($sql);
    $result= mysqli_query($lk,$sql);
    if($result){
        echo "<script>alert('内容信息发布成功');location.href='listContent.php';</script> ";
    }
    mysqli_close($lk);
}

?>