<?php

$dsn = sprintf(
    'mysql:host=%s;dbname=%s;charset=utf8mb4',
    getenv('MYSQL_HOST') ?: 'db',
    getenv('MYSQL_DATABASE') ?: 'test_db'
);

$pdo = new PDO($dsn, getenv('MYSQL_USER') ?: 'user', getenv('MYSQL_PASSWORD') ?: 'pass');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tasks = $pdo->query('SELECT * FROM tasks ORDER BY created_at')->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><?= htmlspecialchars($task['title']) ?></td>
                <td><?= htmlspecialchars($task['description']) ?></td>
                <td><?= $task['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>