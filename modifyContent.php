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
    echo "<script>location.href='listContent.php';</script>";
}
else{
    $sid=$_GET["id"];
    $sql="select * from tb_content where id =".$sid;
    $result =mysqli_query($lk,$sql);
    $rs =mysqli_fetch_array($result);
    $uid=$rs["id"];

}
?>
	<div class="page">
		<form name="addFrm" onsubmit="return chkFrm();" action="updateContent.php?id=<?php echo $sid;?>" method="post" >
			<h4><?php echo $rs['colName'] ?></h4>
			<p><label for="topic">修改标题：</label><input type="text" name="newTopic" id="newTopic" value="<?php echo $rs['topic'] ?>" required="required">
			</p>
            <p>修改类别：
                <label for="newName"><select  name="newName" id="newName" >
                        <?php
                        $sql = "select * from tb_column";
                        $result = mysqli_query($lk,$sql);
                        while($rs1= mysqli_fetch_array($result)){
                            ?>
                            <option><?php echo $rs1["colName"];  ?></option>
                        <?php } ?>
                    </select></label></p>
            <p><label for="author">修改作者：</label><input type="text" name="newAuthor" id="newAuthor" value="<?php echo $rs['author'] ?>" required="required">
            </p>

			<p><input type="submit" value="更新" name="btnUpdate">
			</p>
		</form>
	</div>
    <script>

    </script>
</body>
</html>