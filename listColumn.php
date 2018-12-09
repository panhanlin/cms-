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
			<td colspan="6">列表信息管理系统</td>
		</tr>
		<tr>
			<td width="10%">ID号</td>
			<td width="20%">栏目名称</td>
            <td width="20%">栏目地址</td>
            <td width="20%">是否显示</td>
			<td width="15%">修改</td>
			<td width="15%">删除</td>
		</tr>
		<?php

            $sql = "select * from tb_column";
		include("coon.php");
//		$sql = "select * from tb_info";
		$result = mysqli_query($lk,$sql);
		while($rs=mysqli_fetch_array($result)){
		 ?>
		 <tr>
		 	<td width="10%"><?php echo $rs['id'] ?></td>
		 	<td width="20%"><?php echo $rs['colName'] ?></td>
             <td width="20%"><?php echo $rs['colUrl'] ?></td>
             <td width="20%"><?php echo $rs['colShow'] ?></td>
		 	<td width="15%"><a href="modifyColumn.php?id=<?php echo $rs['id'] ?>">修改</a></td>
		 	<td width="15%"><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a></td>
		 </tr>
	<?php 	} ?>
	</table>
	<script>
		function del(did){
			if(confirm("确定删除？")){
				location.href="delcolumn.php?id="+did;
				return false;
			}
		}
	</script>
</body>
</html>