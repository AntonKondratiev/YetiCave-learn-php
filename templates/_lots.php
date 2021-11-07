<li class="lots__item lot">
  <div class="lot__image">
    <img src=<?= $lot['url_img']; ?> width="350" height="260" alt=<?= $lot['category']?>>
  </div>
  <div class="lot__info">
    <span class="lot__category"><?= $lot['category']; ?></span>
    <h3 class="lot__title">
        <a class="text-link" href='./lot.php?lot_id=<?= $lot_id; ?>'><?= $lot['name']; ?></a></h3>
    <div class="lot__state">
      <div class="lot__rate">
        <span class="lot__amount">Стартовая цена</span>
        <span class="lot__cost">
          <?= mod_price($lot['price']) ?>
        </span>
      </div>
      <div class="lot__timer timer">
          <?= timeCount('23:59:59', '
          now'); ?>
      </div>
    </div>
  </div>
</li>
