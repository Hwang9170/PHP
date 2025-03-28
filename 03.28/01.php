<html>
<head>
  <title>클래스 테스트</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" text="#000000">
  <font size="4">클래스 테스트</font><br><br>
  <?php
    $newuser = new User(); 
    $newuser->print_hello();

    class User {
      public $name = '철수';
      public function print_hello() { 
        print $this->name;
        print " 님 안녕하세요!<br>";
      }
    }
  ?>
</body>
</html>

