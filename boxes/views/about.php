<?php
$abouts = $this->get('abouts');
?>
<link href="<?=$this->getBoxUrl('static/css/about.css') ?>" rel="stylesheet">

<?php if (!empty($abouts)): ?>
  <div id="about">
    <ul class="list-unstyled">
        <?php foreach ($abouts as $about): ?>
          <h3 class="text-center"><?=$this->escape($about->getTitel()) ?></h3>
          <div class="text-center"><img class="rounded-circle" alt="Cinque Terre" src="<?=$this->getBaseUrl($this->escape($about->getImg())) ?>"></div></br>
          <?=$this->escape($about->getText()) ?>
          <li>
            <i class="<?=$this->escape($about->getIcon()) ?>"><a href="<?=$this->escape($about->getLink()) ?>" target="_blank"></a></i>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
    <?=$this->getTrans('noAbout') ?>
<?php endif; ?>
