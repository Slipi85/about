<?php
$abouts = $this->get('abouts');
?>
<link href="<?=$this->getBoxUrl('static/css/about.css') ?>" rel="stylesheet">

<?php if (!empty($abouts)): ?>
  <div id="ilch-about">
    <?php foreach ($abouts as $about): ?>
      <h3 class="text-center"><?=$this->escape($about->getTitel()) ?></h3>
      <div class="text-center ilch-about-img">
        <img class="<?=$this->escape($about->getBimg()) ?>" src="<?=$this->getBaseUrl($this->escape($about->getImg())) ?>">
      </div>
      <div class="ilch-about-text">
        <?=nl2br($this->getHtmlFromBBCode($about->getText())) ?>
      </div>
      <div class="text-center ilch-about-icon">
        <a href="<?=$this->escape($about->getLink()) ?>" target="_blank"><i class="<?=$this->escape($about->getIcon()) ?>"></i></a>
      </div>
    <?php endforeach; ?>
  </div>
<?php else: ?>
    <?=$this->getTrans('noAbout') ?>
<?php endif; ?>
