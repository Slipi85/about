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
        <?php
          if ($about->getGrid() == '1') {
              $social = '<a href="'.$this->escape($about->getLink1()).'" target="_blank"><i class="'.$this->escape($about->getIcon1()).'"></i></a>';
          } elseif ($about->getGrid() == '2') {
              $social = '<a href="'.$this->escape($about->getLink1()).'" target="_blank"><i class="'.$this->escape($about->getIcon1()).'"></i></a>
                          <a href="'.$this->escape($about->getLink2()).'" target="_blank"><i class="'.$this->escape($about->getIcon2()).'"></i></a>';
          } elseif ($about->getGrid() == '3') {
              $social = '<a href="'.$this->escape($about->getLink1()).'" target="_blank"><i class="'.$this->escape($about->getIcon1()).'"></i></a>
                          <a href="'.$this->escape($about->getLink2()).'" target="_blank"><i class="'.$this->escape($about->getIcon2()).'"></i></a>
                          <a href="'.$this->escape($about->getLink3()).'" target="_blank"><i class="'.$this->escape($about->getIcon3()).'"></i></a>';
          } else {
              $social = '<a href="'.$this->escape($about->getLink1()).'" target="_blank"><i class="'.$this->escape($about->getIcon1()).'"></i></a>
                          <a href="'.$this->escape($about->getLink2()).'" target="_blank"><i class="'.$this->escape($about->getIcon2()).'"></i></a>
                          <a href="'.$this->escape($about->getLink3()).'" target="_blank"><i class="'.$this->escape($about->getIcon3()).'"></i></a>
                          <a href="'.$this->escape($about->getLink4()).'" target="_blank"><i class="'.$this->escape($about->getIcon4()).'"></i></a>';
          }
          echo $social;
        ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php else: ?>
    <?=$this->getTrans('noAbout') ?>
<?php endif; ?>
