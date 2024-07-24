<!-- app/views/index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name=”robots” content=”noindex”>
    <title>Todo List</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <h1>Todo List</h1>
    <a href="index.php?action=create">新規作成</a>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <strong><?php echo htmlspecialchars($todo['title']); ?></strong><br>
                <?php echo nl2br(htmlspecialchars($todo['description'])); ?><br>
                <a href="index.php?action=edit&id=<?php echo $todo['id']; ?>">編集</a>
                <a href="index.php?action=delete&id=<?php echo $todo['id']; ?>" onclick="return confirm('削除しますか？');">削除</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
