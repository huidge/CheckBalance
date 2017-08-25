<?php
header("Content-Type: text/html;charset=utf-8");
echo "<title>余额查询记录</title>"; 
error_reporting( E_ALL&~E_NOTICE );
include('connect.php');//链接数据库
	//向数据库插入表单传来的值的sql
    $sql="select * from records";//where 姓名='$name'";
    mysqli_query($link,'set names utf8');
    $result=mysqli_query($link,$sql);//执行sql
// 输出数据

echo "<table border='1px'>";
echo "<td><h3>id</h3></td>";
echo "<td><h3>学号</h3></td>";
echo "<td><h3>访问时间</h3></td>";
while($row = mysqli_fetch_array($result)) {
//$row = mysqli_fetch_array($result);

echo "<tr>\n";
echo "<td>".$row[0];echo "</td>";
echo "<td>".$row[1];echo "</td>";
echo "<td>".$row[2];echo "</td>";
echo "</tr>\n";
//print_r($row);
    }
echo "</table>";
    mysqli_close($link);//关闭数据库
?>