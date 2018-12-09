<?php include("chkPage.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
</head>
<body>
	<table width="700" border="1" cellspacing="0">
		<tr>
			<td colspan="7">列表信息管理系统</td>
		</tr>
		<tr>
			<td width="10%">ID号</td>
			<td width="30%">标题</td>
            <td width="15%">类别</td>
            <td width="10%">作者</td>
            <td width="15%">时间</td>
			<td width="10%">修改</td>
			<td width="10%">删除</td>
		</tr>
		<?php
            date_default_timezone_set("prc");
            $sql = "select * from tb_content order by id desc ";
		include("coon.php");
//		$sql = "select * from tb_info";
		$result = mysqli_query($lk,$sql);
		while($rs=mysqli_fetch_array($result)){
		 ?>
		 <tr>
		 	<td ><?php echo $rs['id'] ?></td>
		 	<td ><?php echo $rs['topic'] ?></td>
             <td ><?php echo $rs['colName'] ?></td>
             <td ><?php echo $rs['author'] ?></td>
             <td ><?php echo date('Y-m-d',strtotime($rs['date']))?></td>
		 	<td ><a href="modifyContent.php?id=<?php echo $rs['id'] ?>">修改</a></td>
		 	<td ><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a></td>
		 </tr>
	<?php 	} ?>
	</table>
	<script>
		function del(did){
			if(confirm("确定删除？")){
				location.href="delcontent.php?id="+did;
				return false;
			}
		}
	</script>
</body>
</html>