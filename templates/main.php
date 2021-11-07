<section class="promo">
  <h2 class="promo__title">Нужен стафф для катки?</h2>
  <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное
    снаряжение.</p>
  <ul class="promo__list">
      <?php foreach ($category as $item): ?>
    <li class="promo__item <?= $item['classCat'] ?>">
      <a class="promo__link" href="all-lots.html"><?= $item['category'] ?></a>
    </li>
      <?php endforeach; ?>
  </ul>
</section>
<section class="lots">
  <div class="lots__header">
    <h2>Открытые лоты</h2>
  </div>
  <ul class="lots__list">
    <?php foreach ($array_lots as $lot_id => $lot): ?>
      <?=include_template('_lots.php', ['lot' => $lot, 'lot_id' => $lot_id]); ?>
    <?php endforeach; ?>
  </ul>
</section>