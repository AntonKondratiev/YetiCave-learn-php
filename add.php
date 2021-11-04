<?php

require_once __DIR__ . '/service/config.php';
require_once __DIR__ . '/service/functions.php';
require_once __DIR__ . '/service/date.php';

$title = ['name' => 'Добавить лот'];
$method = $_POST;
$errors = [];

//$array_name_form = [
//  'lot_name',
//  'category',
//  'message',
//  'file',
//  'lot-rate',
//  'lot-step',
//  'lot-date'
//];
$array_name_form = [
  'lot_name' => '',
  'category' => '',
  'message' => '',
  'file' => '',
  'lot-rate' => '',
  'lot-step' => '',
  'lot-date' => ''
];

if ('POST' === $_SERVER['REQUEST_METHOD']) {

    foreach ($array_name_form as $key => $item) {
      if (empty($method[$key])) {
        $errors[$key] = 'error';
      }
    }

    if (!empty($errors)) {
      foreach ($errors as $k => $i) {
        print_r($k);
      }
    }
}


$content = include_template('_add-lot.php', ['errors' => $errors, 'category' => $category]);

$layout_add_lot = include_template('layout_lot.php', ['content' => $content, 'category' => $category, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth, 'errors' => $errors]);

print ($layout_add_lot);