<?php
session_start();
if (isset($_COOKIE['username'])) {
	# code...
	@mysql_connect("localhost","root","1981427")
	or die("数据库服务器连接器");
	@mysql_select_db("test")//数据库的名称为mydb
	or die("数据库不存在或不可用");
	$username=$_COOKIE['username'];
	$query=@mysql_query("select userflag from users"."where username = '$username'")
	or die("SQL语句执行失败");
	$row=mysql_fetch_array($query);
	$flag=$row['userflag'];
	if ($flag==0) {
		# code...
		echo "欢迎用户".$_SESSION['username']."登录系统";
	}
	else
	{
		echo "您没有权限访问";
	}
?>