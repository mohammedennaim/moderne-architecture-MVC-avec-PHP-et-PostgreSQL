<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1>Liste des <?= $title ?></h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?= htmlspecialchars($article['title']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
