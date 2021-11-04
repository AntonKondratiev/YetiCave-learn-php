<?php

//форматирование суммы под определенный вид ( 5 000 Р)

function mod_price($price)
{
  return number_format(ceil($price), 0, '', ' ') . ' ' . '&#8381;';
}

//шаблонизатор

function include_template($name, $data) {
  $name = 'templates/' . $name;
  $res = '';

  if (!is_readable($name)) {
    return $res;
  }

  ob_start();
  extract($data);
  require $name;

  $res = ob_get_clean();

  return $res;
}

//выводит время в карточки

function timeCount ($time_end, $time_start) {

  $time_end = date_create($time_end);
  $time_start = date_create($time_start);

  $date_res = date_diff($time_end, $time_start);
  $res_time = date_interval_format($date_res, '%H:%I');

  return $res_time;
}

// валидация формы и вывод класса

function check_input($errors, $name_input) {
  $ckeck = false;

  foreach ($errors as $key) {
    if ($key === $name_input) {
      $ckeck = true;
    }
  }

  return $ckeck;
}

