<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP 게시판 예제</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        h1 { color: #333; }
        .post { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .author { color: #666; font-size: 0.9em; }
        .date { font-size: 0.8em; color: #999; }
    </style>
</head>
<body>

<h1>📌 PHP 게시판</h1>

<?php
// 날짜 표시
echo "<p>오늘 날짜: " . date("Y년 m월 d일 H:i:s") . "</p>";

// 게시글 배열 (가상의 데이터베이스 역할)
$posts = [
    ["title" => "첫 번째 게시글", "author" => "관리자", "content" => "안녕하세요! PHP 게시판에 오신 걸 환영합니다."],
    ["title" => "두 번째 글", "author" => "홍길동", "content" => "PHP는 정말 재밌네요!"],
    ["title" => "질문 있습니다!", "author" => "김영희", "content" => "PHP에서 배열은 어떻게 쓰나요?"]
];

// 함수로 게시글 출력
function printPosts($posts) {
    $index = 1;
    foreach ($posts as $post) {
        echo "<div class='post'>";
        echo "<h2>{$index}. " . htmlspecialchars($post['title']) . "</h2>";
        echo "<p class='author'>작성자: " . htmlspecialchars($post['author']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
        echo "<p class='date'>작성 시각: " . date("Y-m-d H:i") . "</p>";
        echo "</div>";
        $index++;
    }
}

printPosts($posts);

// 새로운 글 작성 폼
?>

<hr>
<h2>✍ 새 글 작성</h2>
<form method="POST">
    <label>제목: <input type="text" name="title" required></label><br><br>
    <label>작성자: <input type="text" name="author" required></label><br><br>
    <label>내용:<br>
    <textarea name="content" rows="5" cols="50" required></textarea></label><br><br>
    <input type="submit" value="글 작성">
</form>

<?php
// POST 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newTitle = $_POST['title'];
    $newAuthor = $_POST['author'];
    $newContent = $_POST['content'];

    echo "<hr><h2>📢 작성된 글</h2>";
    echo "<h3>" . htmlspecialchars($newTitle) . "</h3>";
    echo "<p class='author'>작성자: " . htmlspecialchars($newAuthor) . "</p>";
    echo "<p>" . nl2br(htmlspecialchars($newContent)) . "</p>";
}
?>

</body>
</html>
