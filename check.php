<?php
@mysql_connect("localhost","root",1981427)
or die("数据库服务器连接失败")；
@mysql_select_db("text")
or die("数据库不存在或不可用");
$username=$_POST['username'];
$passcode=$_POST['passcode'];
$cookie=$_POST['cookie'];
$query=@mysql_query("select username,userflag from users"."where username='$username'and passcode='$passcode'")
or die("SQL失败");
if ($row=mysql_fetch_array($query)) {
	# code...
	if ($row['userflag']==1 or $row['userflag']==0) {
		# code...
		switch ($cookie) {
			case 0:
				# code...
			setcookie("username",$row['username']);
				break;
			case '1':
				# code...
			setcookie("username",$row['username'],time()+7*24*60*60);
				break;
			case '2':
				# code...
			setcookie("username",$row['username'],time()+30*24*60*60);
				break;
			case '3':
				# code...
			setcookie("username",$row['username'],time+365*24*60*60);
				break;
			default:
				# code...
				break;
		}
		header("location:main.php");
	}
	else
	{
		echo "用户权限信息不正确";
	}
	}
	else
	{
		echo "用户名或密码不正确";
	}
?>
