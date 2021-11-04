<?php

require_once __DIR__ . '/service/config.php';
require_once __DIR__ . '/service/functions.php';
require_once __DIR__ . '/service/date.php';

//var_dump(isset($array_lots[$_GET['lot_id']]));

if (isset($array_lots[$_GET['lot_id']])) {
  $content_page = include_template('_description-lot.php', ['array_lots' => $array_lots, 'category' => $category]);
} else {
  $content_page = require_once __DIR__ . '/404.php';
}

$layout_page_lot = include_template('layout_lot.php', ['content' => $content_page, 'category' => $category, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth, 'array_lots' => $array_lots]);


print ($layout_page_lot);

//TODO почему то при 404 ломает верстку и выводит единицу
