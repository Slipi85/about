<?php if (!empty($this->get('about'))) {
    echo $this->getTrans('edit');
} else {
    echo $this->getTrans('add');
}
?>
</h1>
<form class="form-horizontal" method="POST">
    <?=$this->getTokenField() ?>

    <div class="form-group <?=$this->validation()->hasError('titel') ? 'has-error' : '' ?>">
        <label for="titel" class="col-lg-2 control-label">
            <?=$this->getTrans('titel') ?>:
        </label>
        <div class="col-lg-4">
        <input type="titel"
                   class="form-control"
                   id="titel"
                   name="titel"
                   value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getTitel()) : $this->escape($this->originalInput('about')) ?>" />
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('img') ? 'has-error' : '' ?>">
        <label for="selectedImage" class="col-lg-2 control-label">
            <?=$this->getTrans('img') ?>:
        </label>
        <div class="col-lg-4">
            <div class="input-group">
                <input type="img"
                       class="form-control"
                       id="selectedImage"
                       name="img"
                       value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getImg()) : $this->originalInput('img') ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
      <label for="text" class="col-lg-2 control-label">
          <?=$this->getTrans('text') ?>:
      </label>
        <div class="col-lg-4">
            <textarea class="form-control ckeditor"
                      id="ck_1"
                      name="text"
                      toolbar="ilch_html"><?=($this->get('about') != '') ? $this->get('about')->getText(): $this->originalInput('text') ?></textarea>
        </div>
    </div>
    <h1><?=$this->getTrans('aboutSocial') ?></h1>
    <div class="form-group <?=$this->validation()->hasError('link') ? 'has-error' : '' ?>">
        <label for="link" class="col-lg-2 control-label">
            <?=$this->getTrans('link') ?>:
        </label>
        <div class="col-lg-4">
            <input type="url"
                   class="form-control"
                   id="link"
                   name="link"
                   value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getLink()) : $this->escape($this->originalInput('link')) ?>" />
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('icon') ? 'has-error' : '' ?>">
        <label for="icon" class="col-lg-2 control-label">
            <?=$this->getTrans('icon') ?>:
        </label>
        <div class="col-lg-4">
          <select class="form-control fontawesome-select" id="icon" name="icon">
              <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
              <option value="fas fa-globe-europe" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
              <option value="fab fa-facebook-f" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
              <option value="fab fa-twitter" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
              <option value="fab fa-twitch" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
              <option value="fab fa-youtube" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
              <option value="fab fa-discord" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
              <option value="fa fa-instagram" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
              <option value="fa fa-snapchat" <?=($this->get('about') != '' && $this->get('about')->getIcon() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
          </select>
        </div>
    </div>
    <?=$this->getDialog('mediaModal', $this->getTrans('media'), '<iframe frameborder="0"></iframe>') ?>
    <script src="<?=$this->getStaticUrl('js/datetimepicker/js/bootstrap-datetimepicker.min.js') ?>" charset="UTF-8"></script>
    <?php if (strncmp($this->getTranslator()->getLocale(), 'en', 2) !== 0): ?>
        <script src="<?=$this->getStaticUrl('js/datetimepicker/js/locales/bootstrap-datetimepicker.'.substr($this->getTranslator()->getLocale(), 0, 2).'.js') ?>" charset="UTF-8"></script>
    <?php endif; ?>
    <script>
    <?=$this->getMedia()
            ->addMediaButton($this->getUrl('admin/media/iframe/index/type/single/'))
            ->addUploadController($this->getUrl('admin/media/index/upload'))
    ?>
    </script>
    <?php if (!empty($this->get('about'))) {
        echo $this->getSaveBar('updateButton');
    } else {
        echo $this->getSaveBar('addButton');
    }
    ?>
</form>
