<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("test",$conn)
or die("数据错误");
if (isset($_POST['Submit2'])) {
	# code...
	if (!get_magic_quotes_gpc()) {
		# code...
		foreach ($_POST as $items) {
			# code...
			$items=addslashes($items);
		}
	}
	if ($_POST['username']=='a'&&$_POST['password']=='a') {
		# code...
		$_SESSION['login']=true;
		echo"<script>alert('登陆成功');location.href='  '</script>"
		exit();
	}
	else{
		echo "<script>登录失败</script>";
	}
}
?>