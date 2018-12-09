<?php 
include("coon.php");
if(isset($_POST["btnSave"])){
	$colName = $_POST["colName"];
	$colUrl=($_POST["colUrl"]);
	//die($colUrl);
    $colShow=($_POST["colShow"]);
    $sql="insert into tb_column(colName,colUrl,colShow) values('$colName','$colUrl','$colShow')";
    //die($sql);
    //$result = mysqli_query($lk,$sql);
    $result = mysqli_query($lk,$sql);
    if($result){
            echo "<script>alert('添加栏目数据成功！');location.href='listColumn.php';</script>";
        }
		mysqli_close($lk);
	}
?>