<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔖 ブックマーク - データ登録</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="decoration"></div>
    <div class="decoration"></div>

    <header class="header">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-bookmark"></i>
                ブックマークシステム
            </a>
            <a href="select.php" class="nav-link">
                <i class="fas fa-list"></i>
                登録一覧
            </a>
        </div>
    </header>

    <main class="main-container form-page">
        <div class="form-card">
            <h1 class="form-title">🔖 ブックマーク登録</h1>
            <p class="form-subtitle">あなたのおすすめサイトを教えてください</p>

            <form method="post" action="insert.php">
                <div class="form-group">
                    <label for="title" class="form-label">
                        <i class="fas fa-book"></i> サイト名
                    </label>
                    <input type="text" id="title" name="title" class="form-input" placeholder="例：PHPマニュアル" required>
                </div>

                <div class="form-group">
                    <label for="url" class="form-label">
                        <i class="fas fa-link"></i> URL
                    </label>
                    <input type="url" id="url" name="url" class="form-input" placeholder="例：https://www.php.net/" required>
                </div>

                <div class="form-group">
                    <label for="comment" class="form-label">
                        <i class="fas fa-comment"></i> コメント
                    </label>
                    <textarea id="comment" name="comment" class="form-textarea" placeholder="このサイトのおすすめポイントなど..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i>
                    登録する
                </button>
            </form>
        </div>
    </main>
</body>
</html>

