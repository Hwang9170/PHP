<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP 테스트</title>
</head>
<body>
<?php
// DB 접속 정보
$db_user = "sample";       
$db_pass = "password";      
$db_host = "localhost";     
$db_name = "sampledb";      
$db_type = "mysql";         

// DSN 생성
$dsn = "{$db_type}:host={$db_host};dbname={$db_name};charset=utf8";

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $search_key = '%' . (isset($_POST['search_key']) ? $_POST['search_key'] : '') . '%';

    $sql = "
        SELECT *
        FROM member
        WHERE last_name  LIKE :search_key
           OR first_name LIKE :search_key
    ";

    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':search_key', $search_key, PDO::PARAM_STR);
    $stmh->execute();

    $count = $stmh->rowCount();
    echo "검색 결과는 {$count}건입니다.<br>";

    if ($count < 1) {
        echo "검색 결과가 없습니다.<br>";
    } else {
        // 결과 출력 테이블
        echo '<table width="450" border="1" cellspacing="0" cellpadding="8">';
        echo '<thead><tr>';
        echo '<th>번호</th>';
        echo '<th>성</th>';
        echo '<th>이름</th>';
        echo '<th>연령</th>';
        echo '</tr></thead><tbody>';
        while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td align="center">' . htmlspecialchars($row['id']) . '</td>';
            echo '<td>' . htmlspecialchars($row['last_name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['first_name']) . '</td>';
            echo '<td align="center">' . htmlspecialchars($row['age']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }

} catch (PDOException $e) {
    // 에러 발생 시 메시지 출력
    die('오류: ' . htmlspecialchars($e->getMessage()));
}
?>
<!-- 검색 폼 -->
<form method="post" action="">
    <label for="search_key">검색어:</label>
    <input type="text" id="search_key" name="search_key" value="<?php echo isset($_POST['search_key']) ? htmlspecialchars($_POST['search_key']) : ''; ?>">
    <button type="submit">검색</button>
</form>

</body>
</html>
