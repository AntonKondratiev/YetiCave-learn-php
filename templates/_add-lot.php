
  <form class="form form--add-lot container <?php if ($error === 'true'): ?>form--invalid<?php endif; ?>" action="/add.php" method="post"> <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
      <div class="form__item <?php if (check_valid('lot-name', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
        <label for="lot-name">Наименование</label>
        <input id="lot-name" type="text" name="lot-name" placeholder="Введите наименование лота" value="<?= result_value('lot-name', $array_name, $text_error_field) ?>">
            <span class="form__error">Введите наименование лота</span>
      </div>
      <div class="form__item <?php if (check_valid('category', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
      <label for="category">Категория</label>
        <select id="category" name="category" >
          <option>Выберите категори</option>
          <option>Доски и лыжи</option>
          <option>Крепления</option>
          <option>Ботинки</option>
          <option>Одежда</option>
          <option>Инструменты</option>
          <option>Разное</option>
        </select>
        <span class="form__error">Выберите категорию</span>
      </div>
    </div>
    <div class="form__item form__item--wide <?php if (check_valid('message', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
      <label for="message">Описание</label>
      <textarea id="message" name="message" placeholder="Напишите описание лота"><?= result_value('message', $array_name, $text_error_field) ?></textarea>
      <span class="form__error">Напишите описание лота</span>
    </div>
    <div class="form__item form__item--file <?php if (check_valid('file', $array_name, $text_error_field)): ?> form__item--uploaded <?php endif; ?>">
      <label>Изображение</label>
      <div class="preview">
        <button class="preview__remove" type="button">x</button>
        <div class="preview__img">
          <img src="../img/avatar.jpg" width="113" height="113" alt="Изображение лота">
        </div>
      </div>
      <div class="form__input-file">
        <input class="visually-hidden" type="file" id="photo2" value="<?= result_value('file', $array_name, $text_error_field) ?>" name="file">
        <label for="photo2">
          <span>+ Добавить</span>
        </label>
      </div>
    </div>
    <div class="form__container-three">
      <div class="form__item form__item--small <?php if (check_valid('lot-rate', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
        <label for="lot-rate">Начальная цена</label>
        <input id="lot-rate" type="number" name="lot-rate" placeholder="0" value="<?= result_value('lot-rate', $array_name, $text_error_field) ?>">
        <span class="form__error">Введите начальную цену</span>
      </div>
      <div class="form__item form__item--small <?php if (check_valid('lot-step', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
        <label for="lot-step">Шаг ставки</label>
        <input id="lot-step" type="number" name="lot-step" placeholder="0" value="<?= result_value('lot-step', $array_name, $text_error_field) ?>">
        <span class="form__error">Введите шаг ставки</span>
      </div>
      <div class="form__item <?php if (check_valid('lot-date', $array_name, $text_error_field)): ?> form__item--invalid <?php endif; ?>">
        <label for="lot-date">Дата окончания торгов</label>
        <input class="form__input-date" id="lot-date" type="date" name="lot-date" value="<?= result_value('lot-date', $array_name, $text_error_field) ?>">
        <span class="form__error">Введите дату завершения торгов</span>
      </div>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button" name="submit">Добавить лот</button>
  </form>
