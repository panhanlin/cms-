<?php include("chkPage.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .page{
            width: 500px;
            border: 1px solid #f30;
            margin: 10px;
        }
        .page h4{
            height: 25px;
            background-color: #f30;
            font-weight: normal;
            padding-left: 10px;
            line-height: 25px;
        }
        .page{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include("coon.php");
if (!isset($_GET["id"])){
    echo "<script>location.href='listColumn.php';</script>";
}
else{
    $sid=$_GET["id"];
    $sql="select * from tb_column where id =".$sid;
    $result =mysqli_query($lk,$sql);
    $rs =mysqli_fetch_array($result);
    $uid=$rs["id"];

}
?>
	<div class="page">
		<form name="addFrm" onsubmit="return chkFrm();" action="updateColumn.php?id=<?php echo $sid;?>" method="post" >
			<h4><?php echo $rs['colName'] ?></h4>
			<p><label for="colName">修改栏目名称：</label><input type="text" name="newcolName" id="newcolName" value="<?php echo $rs['colName'] ?>" required="required">
			</p>
            <p><label for="colUrl">修改栏目地址：</label><input type="text" name="rnewcolUrl" id="rnewcolUrl" value="<?php echo $rs['colUrl'] ?>" required="required">
            </p>

            <p><label for="colShow">更改显示：</label><input type="text" name="rnewcolShow" id="rnewcolShow" value="<?php echo $rs['colShow'] ?>" required="required">
            </p>
			<p><input type="submit" value="更新" name="btnUpdate">
			</p>
		</form>
	</div>
    <script>

    </script>
</body>
</html>