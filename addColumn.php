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
    <form name="addFrm" onsubmit="return chkFrm();" action="saveColumn.php" method="post" >
        <h4>添加栏目信息</h4>
        <p><label for="colName">输入栏目名称：</label><input type="text" name="colName" id="colName"></p>
        <p><label for="colUrl">输入栏目地址：</label><input type="text" name="colUrl" id="colUrl">
        </p>
        <p><label for="colShow">是否显示栏目：</label>
            <input type="radio" name="colShow" value="0" checked="checked">否
            <input type="radio" name="colShow" value="1">是
        </p>
        <p><input type="submit" value="保存" name="btnSave">
        </p>
    </form>
</div>
<script>
    function chkFrm(){
        if(addFrm.colName.value == ""){
            alert("此栏目不能为空！");
            addFrm.colName.focus();
            return false;
        }
        if(addFrm.colUrl.value == ""){
            alert("此栏目路径不能为空！");
            addFrm.pwd.focus();
            return false;
        }

    }
</script>
</body>
</html>