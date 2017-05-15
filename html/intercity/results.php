<?php
if($_GET['code']==null )
{
}
else
{
  $code=$_GET['code'];

  require_once('Http2.php');
  echo "<h2>sorry</h2>";
  $r = new HttpRequest("Get", "http://bigturner.in/spikeshell?code="+$code, array(
    ));
  if ($r->getError()) {
    echo "<h2>sorry, an error occured</h2>";
  }
  else {
    echo "<h2>".$r->getResponse()"</h2>"
  }
}

?>