<?php include("chkPage.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
</head>
<body>
	<table width="600" border="1" cellspacing="0">
		<tr>
			<td colspan="5">学生信息管理系统</td>
		</tr>
		<tr>
			<td width="25%">ID号</td>
			<td width="25%">用户名称</td>
			<td width="25%">修改</td>
			<td width="25%">删除</td>
		</tr>
		<?php

            $sql = "select * from tb_user";
		include("coon.php");
//		$sql = "select * from tb_info";
		$result = mysqli_query($lk,$sql);
		while($rs=mysqli_fetch_array($result)){
		 ?>
		 <tr>
		 	<td width="20%"><?php echo $rs['id'] ?></td>
		 	<td width="20%"><?php echo $rs['username'] ?></td>
		 	<td width="20%"><a href="modifyUser.php?id=<?php echo $rs['id'] ?>">修改</a></td>
		 	<td width="20%"><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a></td>
		 </tr>
	<?php 	} ?>
	</table>
	<script>
		function del(did){
			if(confirm("确定删除？")){
				location.href="delUser.php?id="+did;
				return false;
			}
		}
	</script>
</body>
</html>