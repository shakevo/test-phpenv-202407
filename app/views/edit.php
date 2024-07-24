<!-- app/views/todos/edit.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name=”robots” content=”noindex”>
    <title>編集</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Todo編集</h1>
    <form action="index.php?action=edit&id=<?php echo $todo['id']; ?>" method="POST">
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($todo['title']); ?>" required>
        <label for="description">説明:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($todo['description']); ?></textarea>
        <button type="submit">更新</button>
    </form>
</body>
</html>
