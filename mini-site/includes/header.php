<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Mon site" ?></title>
    <link rel="stylesheet" href="./assets/css/common.css">
    <?php if (!empty($css)): ?>
    <link rel="stylesheet" href="assets/css/<?= htmlspecialchars($css) ?>">
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap">

</head>

<body>
    <header>
        <a href="./index.php" class="linktop">Accueil</a>
        <a href="./modules.php" class="linktop">Modules</a>
        <a href="./ Évaluation.php" class="linktop">Evaluation</a>
    </header>