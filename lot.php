<?php

require_once __DIR__ . '/service/config.php';
require_once __DIR__ . '/service/functions.php';
require_once __DIR__ . '/service/date.php';

$lot_title = '';

if (isset($array_lots[$_GET['lot_id']])) {
  $content_page = include_template('_lot.php', ['array_lots' => $array_lots, 'category' => $category, 'lot' => $array_lots[$_GET['lot_id']]]);
  $lot_title = $array_lots[$_GET['lot_id']]['name'];
} else {
  $content_page = include_template('404.php', ['text_error' => 'Произошла ошибка!!!']);
  $lot_title = 'Ошибка 404';
}

$layout_page_lot = include_template('layout_lot.php', ['content' => $content_page, 'category' => $category, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth, 'array_lots' => $array_lots, 'lot_title' => $lot_title]);

print ($layout_page_lot);

