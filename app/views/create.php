<!-- app/views/todos/create.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name=”robots” content=”noindex”>
    <title>新規作成</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>新規Todo作成</h1>
    <form action="index.php?action=create" method="POST">
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">説明:</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit">追加</button>
    </form>
</body>
</html>
