<?php

require_once __DIR__ . '/service/config.php';
require_once __DIR__ . '/service/functions.php';
require_once __DIR__ . '/service/date.php';

$method = $_POST;
$error = 'false';
$text_error = 'Произошла ошибка при добавлении лота. Попробуйсте позже';
$lot_title = '';
$HttpStatus = http_response_code();
$text_error_field = 'Необходимо заполнить поле';

$array_name_form = [
  'lot-name' => '',
  'category' => '',
  'message' => '',
//  'file' => '',
  'lot-rate' => '',
  'lot-step' => '',
  'lot-date' => ''
];

if ('POST' === $_SERVER['REQUEST_METHOD']) {

  foreach ($array_name_form as $key => $value) {
    if (empty($method[$key])) {
      $array_name_form[$key] = $text_error_field;
    } else {
      $array_name_form[$key] = $method[$key];
    }
  }

  if ( !intval($array_name_form['lot-rate'] )) {
    $array_name_form['lot-rate'] = $text_error_field;
  }

  if ( !intval($array_name_form['lot-step'] )) {
    $array_name_form['lot-step'] = $text_error_field;
  }

  foreach ($array_name_form as $k => $v) {
    if ($v === $text_error_field) {
      $error = 'true';
    }
  }

  if ($error === 'false') {
    $lotNew = [
      'name' => $array_name_form['lot-name'],
      'url_img' => 'img/lot-1.jpg',
      'description' => $array_name_form['message'],
      'minBet' => $array_name_form['lot-rate'],
      'minStep' => $array_name_form['lot-step'],
      'dateEndBargaining' => $array_name_form['lot-date']
    ];
    $lot_title = $lotNew['name'];
    $content = include_template('_lot.php', ['error' => $error, 'category' => $category, 'text_error_field' => $text_error_field, 'lot' => $lotNew]);
  } else {
    $lot_title = result_value('lot-name', $array_name_form, $text_error_field);
    $content = include_template('_add-lot.php', ['error' => $error, 'category' => $category, 'text_error_field' => $text_error_field, 'array_name' => $array_name_form]);
  }
} else {
  $lot_title = 'Добавить лот';
  $content = include_template('_add-lot.php', ['error' => $error, 'category' => $category, 'text_error_field' => $text_error_field, 'array_name' => $array_name_form]);
}

$layout_add_lot = include_template('layout_lot.php', ['content' => $content, 'category' => $category, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'is_auth' => $is_auth, 'lot_title' => $lot_title]);

print ($layout_add_lot);