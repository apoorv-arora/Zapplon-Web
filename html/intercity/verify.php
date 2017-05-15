<form action="emailinter.php" method="GET" t="<?php echo $_GET['t'] ?>">
<div style="visibility: none;display: none">
       <input type="text" name="t" value="<?php echo $_GET['t'] ?>"></input>
</div>
<input type="text" id="email" name="email" placeholder="EMAIL" required></input>
<input type="submit" value="SEND"></input>
</form>