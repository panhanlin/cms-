<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .logo{
            width: 1000px;
            height: 30px;
            background-color: lightpink;
        }
        .nav{
            width: 1000px;
            height: 30px;
            background-color: palevioletred;

        }
        .nav ul {
           list-style: none;
        }
        .nav ul li {
            float: left;
            font-size: 20px;
            line-height: 30px;
            margin-right: 20px;
        }
        .cnt{
            overflow: hidden;
        }
        .cnt .left{
            width: 600px;
            border: 1px solid #ccc;
            height: 400px;
            float: left;
            margin-right: 5px;
        }
        .cnt .right{
            width: 350px;
            height: 400px;
            float: left;
            border: 1px solid #ccc;
        }
        .left ul {
            list-style: none;
        }
        .left ul li{
            height: 25px;
            font: 15px/25px 微软雅黑;
            padding-left: 10px;
        }
        .left h3{
            height: 25px;
            background-color: #ccc;
            font: 17px/25px 微软雅黑;
            padding-left: 20px;
        }
        .left ul li a {
            display: inline-block;
            width: 450px;
        }
    </style>
</head>
<body>
<div class="logo"></div>
<div class="nav">
    <ul>
        <?php
        include ("coon.php");
        $sql="select * from tb_column order by  id  asc ";
        $result= mysqli_query($lk,$sql);
        while(
            $rs=mysqli_fetch_array($result)){
            ?>
        <li><a href="<?php echo  $rs["colUrl"];?>"><?php echo  $rs["colName"];?></a></li>
           <?php } ?>
    </ul>
</div>
<div class="cnt">
    <div class="left">
        <h3>游戏资讯</h3>
        <ul>
            <?php
            date_default_timezone_set("prc");
            include ("coon.php");
            $sql="select * from tb_content where colName='游戏资讯'order by id asc";
            $result=mysqli_query($lk,$sql);
            while(
                $rs=mysqli_fetch_array($result)){
                ?>
            <li><a href="zixun.php?sid=<?php echo $rs["id"];?>"><?php echo  $rs["topic"];?> </a>
                <?php echo $rs["author"];?>
                <span><?php echo $rs["date"];?></span></li>
          <?php  }?>

        </ul>
    </div>
    <div class="right"></div>
</div>
<div class="footer"></div>
</body>
</html>