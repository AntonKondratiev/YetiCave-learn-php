<?php

require_once __DIR__ . '/service/config.php';
require_once __DIR__ . '/service/functions.php';
require_once __DIR__ . '/service/date.php';

//Вывод страницы в зависимости от условия   enable

if ($main_config['enable']) {
  $content_page = include_template('main.php', ['array_lots' => $array_lots, 'category' => $category]);
} else {
  $content_page = include_template('off.php', ['error_msg' => $main_config['error_msg']]);
}

$layout_content = include_template('layout.php', ['content' => $content_page, 'title_site' => $main_config['title_site'], 'category' => $category, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth]);

print ($layout_content);