
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
			width: 400px;
			border: 1px solid #f90;
			margin: 50px auto;
		}
		h3{
			height: 30px;
			background-color: #f90;
			font: 17px/30px 微软雅黑;
			padding-left: 10px;
            text-align: center;
		}
		p{
			text-align: center;
			margin: 5px;
		}
		
	</style>
</head>
<body>
	<div class="page">
		<h3>CMS后端登录窗口</h3>
		<form action="valid1.php" method="post" name="loginFrm" onsubmit="return chkFrm();">
		<p><label for="uid">账号: <input type="text" name="uid" id="uid"></label></p>
		<p><label for="pwd">密码: <input type="password" name="pwd" id="pwd"></label></p>
		<p><input type="submit" value=" 登 录 " name="lgnBtn"></p></form>
	</div>
	<script>
		function chkFrm(){
			if(loginFrm.uid.value == ""){
				alert("此账号不能为空！");
				loginFrm.uid.focus();
				return false;
			}
			if(loginFrm.pwd.value == ""){
				alert("此密码不能为空！");
				loginFrm.pwd.focus();
				return false;
			}

		}
	</script>
</body>
</html>