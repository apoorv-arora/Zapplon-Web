<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$p=$_GET['param'];
	$p=json_decode($p);
?>
<form action="<?php echo $_GET['url']; ?>" method="post" name="frm">
	<?php

		echo $p->message;
	?>	
	<img src="../../assets/images/redirecting.gif" style="margin-left:180px;margin-top:80px;width:1000px;height:500px;background-repeat: no-repeat; ">
</form>
</body>
</html>
<script type="text/javascript">
document.frm.submit();
</script>
</script>
