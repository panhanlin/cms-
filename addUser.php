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
	<div class="page">
		<form name="addFrm" onsubmit="return chkFrm();" action="saveUser.php" method="post" >
			<h4>添加管理员</h4>
			<p><label for="uid">输入账户：</label><input type="text" name="uid" id="uid"></p>
			<p><label for="pwd">输入密码：</label><input type="password" name="pwd" id="pwd">
			</p>
            <p><label for="rpwd">确认密码：</label><input type="password" name="rpwd" id="rpwd">
            </p>
			<p><input type="submit" value="保存" name="btnSave">
			</p>
		</form>
	</div>
    <script>
        function chkFrm(){
            if(addFrm.uid.value == ""){
                alert("此账号不能为空！");
                addFrm.uid.focus();
                return false;
            }
            if(addFrm.pwd.value == ""){
                alert("此密码不能为空！");
                addFrm.pwd.focus();
                return false;
            }
            if(addFrm.pwd.value != addFrm.rpwd.value){
                alert("两次输入密码不一致！");
                addFrm.pwd.value ="";
                addFrm.rpwd.value = "";
                addFrm.pwd.focus();
                return false;
            }

        }
    </script>
</body>
</html>