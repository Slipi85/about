<?php
$abouts = $this->get('abouts');
?>
<link href="<?=$this->getBoxUrl('static/css/about.css') ?>" rel="stylesheet">

<?php if ($abouts): ?>
  <div id="ilch-about">
      <?php foreach ($abouts as $about): ?>
      <h3 class="text-center"><?=$this->escape($about->getTitel()) ?></h3>
      <div class="text-center ilch-about-img">
          <?php if ($about->getImg()): ?>
          <img class="<?=$this->escape($about->getBimg()) ?>" src="<?=$this->getBaseUrl($this->escape($about->getImg())) ?>" alt="<?=$this->escape($about->getTitel()) ?>">
          <?php else: ?>
              <img class="<?=$this->escape($about->getBimg()) ?>" src="<?=$this->getBoxUrl('static/images/noavatar.jpg') ?>" alt="<?=$this->escape($about->getTitel()) ?>">
          <?php endif; ?>
      </div>
      <div class="ilch-about-text">
          <?=nl2br($this->getHtmlFromBBCode($about->getText())) ?>
      </div>
      <div class="text-center ilch-about-icon">
          <?php
          $social = '';
          switch ($about->getGrid()) {
              case 4:
                  $social .= '<a href="'.$this->escape($about->getLink4()).'" target="_blank"><i class="'.$this->escape($about->getIcon4()).'"></i></a>';
              // no break
              case 3:
                  $social .= '<a href="'.$this->escape($about->getLink3()).'" target="_blank"><i class="'.$this->escape($about->getIcon3()).'"></i></a>';
              // no break
              case 2:
                  $social .= '<a href="'.$this->escape($about->getLink2()).'" target="_blank"><i class="'.$this->escape($about->getIcon2()).'"></i></a>';
              // no break
              case 1:
                  $social .= '<a href="'.$this->escape($about->getLink1()).'" target="_blank"><i class="'.$this->escape($about->getIcon1()).'"></i></a>';
              // no break
          }
          echo $social;
          ?>
      </div>
      <?php endforeach; ?>
  </div>
<?php else: ?>
    <?=$this->getTrans('noAbout') ?>
<?php endif; ?>
