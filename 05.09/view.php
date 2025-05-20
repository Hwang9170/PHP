<HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<?php
if (isset($_POST["onamae"]))
    $name = htmlspecialchars($_POST["onamae"]);
    print $name . "님 안녕하세요!";

?>
</BODY>
</HTML>
