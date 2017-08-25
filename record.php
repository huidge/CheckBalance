<?php
    header("Content-Type: text/html;charset=utf-8"); 
    $queryString = "http://weixin.17wanxiao.com/mobile/index.html?customerCode=1007&type=3&outid=";
    error_reporting( E_ALL&~E_NOTICE );
    include('connect.php');//链接数据库
  //向数据库插入表单传来的值的sql
    $sno=$_POST['sno'];
    $sql="insert into records values(null,'$sno',now())";
    mysqli_query($link,'set names utf8');
    if($sno != "")
    {
      $result=mysqli_query($link,$sql);//执行sql
      mysqli_close($link);//关闭数据库
      $queryString = $queryString. $sno."&openid=o-wzYjnJWu6kv2BAIDCbE0HjWkTM&name=%E9%83%AD%E5%BF%97%E8%BE%89";
      header("Location: $queryString"); 
    }
    else
    {
      echo "<script>alert('请输入学号后查询！');</script>";
      mysqli_close($link);//关闭数据库
    }
    
?>  
