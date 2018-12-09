<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理界面</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .logo,.cnt,.footer{
            width: 1000px;
            margin: 0 auto;
            border: 1px solid #555;
        }
        .logo{
            height: 70px;
            font: 20px/70px 微软雅黑;
            color: #333;
        }
        .logo h3{
            padding-left: 10px;
        }
        .cnt{
            overflow: hidden;
        }
        .cnt .left{
            float: left;
            width: 150px;
            height: 500px;
            border-right: 2px solid #f90;
        }
        .cnt .right{
            width: 840px;
            float: left;
            height: 500px;
        }
        .footer{
            height: 40px;
            font: 13px/40px 微软雅黑;
            text-align: center;
        }
        .left h4 {
            padding-left: 10px;
            font: 15px/20px 微软雅黑;
            color: #f90;
            margin-top: 10px;
        }
        .left ul{
            list-style: npne;
        }
        .left ul li {
            height: 20px;
            font: 13px/20px 微软雅黑;
            padding-left: 20px;
        }
        a:visited,a:link{
            color: #222;
            text-decoration: none;
        }
        a:hover{
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="logo"><h3>通用CMS管理系统</h3></div>
<div class="cnt">
    <div class="left">
        <h4>用户管理</h4>
        <ul>
            <li><a href="addUser.php" target="mainFrame">添加用户</a></li>
            <li><a href="listUser.php" target="mainFrame">用户列表</a></li>
        </ul>
        <h4>栏目管理</h4>
        <ul>
            <li><a href="addColumn.php" target="mainFrame">添加栏目</a></li>
            <li><a href="listColumn.php" target="mainFrame">栏目列表</a></li>
        </ul>
        <h4>信息管理</h4>
        <ul>
            <li><a href="addContent.php" target="mainFrame">发布信息</a></li>
            <li><a href="listContent.php" target="mainFrame">信息列表</a></li>
        </ul>
        <h4>数据管理</h4>
        <ul>
            <li><a href="#" target="mainFrame">数据备份</a></li>
            <li><a href="#" target="mainFrame">数据导出</a></li>
        </ul>
    </div>
    <div class="right"> <iframe src="login.php" frameborder="0" width="840" height="500" name="mainFrame"></iframe></div>
</div>
<div class="footer">版权所有，翻录必究</div>
</body>
</html>