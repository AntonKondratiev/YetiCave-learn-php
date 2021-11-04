<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title><?= $title_site; ?></title>
  <link href="css/normalize.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

<header class="main-header">
  <?= include_template('_header.php', ['user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth]) ?>
</header>

<main class="container">
  <?= $content; ?>
</main>

<footer class="main-footer">
  <?= include_template('_footer.php', ['category' => $category]) ?>
</footer>

</body>

</html>