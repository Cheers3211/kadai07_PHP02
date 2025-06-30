<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('pdo.php');

$sql = "SELECT * FROM bookmark_table ORDER BY indate DESC";
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ブックマーク一覧</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <i class="fas fa-bookmark"></i> ブックマークシステム
            </a>
            <a href="index.php" class="nav-link">
                <i class="fas fa-plus"></i> 新規登録
            </a>
        </div>
    </header>
    <main class="main-container">
        <h1 class="form-title">🔖 ブックマーク一覧</h1>
        <ul>
        <?php foreach($stmt as $row): ?>
            <li>
                <?= htmlspecialchars($row['indate']) ?> :
                <a href="<?= htmlspecialchars($row['url']) ?>" target="_blank">
                    <?= htmlspecialchars($row['title']) ?>
                </a><br>
                <?= nl2br(htmlspecialchars($row['comment'])) ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
