<h1><?php if (!empty($this->get('about'))) {
    echo $this->getTrans('edit');
} else {
    echo $this->getTrans('add');
}
?>
</h1>
<h1><?=$this->getTrans('aboutMe') ?></h1>
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
    <h1><?=$this->getTrans('aboutImg') ?></h1>
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
    <div class="form-group <?=$this->validation()->hasError('bimg') ? 'has-error' : '' ?>">
        <label for="icon" class="col-lg-2 control-label">
            <?=$this->getTrans('bimg') ?>:
        </label>
        <div class="col-lg-4">
          <select class="form-control fontawesome-select" id="bimg" name="bimg">
              <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
              <option value="circle" <?=($this->get('about') != '' && $this->get('about')->getBimg() === 'circle') ? 'selected' : '' ?>><?=$this->getTrans('circle') ?></option>
              <option value="img-thumbnail" <?=($this->get('about') != '' && $this->get('about')->getBimg() === 'img-thumbnail') ? 'selected' : '' ?>><?=$this->getTrans('thumbnail') ?></option>
              <option value="rounded" <?=($this->get('about') != '' && $this->get('about')->getBimg() === 'rounded') ? 'selected' : '' ?>><?=$this->getTrans('rounded') ?></option>
          </select>
        </div>
    </div>
    <h1><?=$this->getTrans('aboutSocial') ?></h1>
    <div class="form-group <?=$this->validation()->hasError('grid') ? 'has-error' : '' ?>">
          <label for="grid" class="col-lg-2 control-label">
              <?=$this->getTrans('grid') ?>:
          </label>
          <div class="col-lg-4">
            <select class="form-control" id="grid" name="grid">
                <option value=""><?=$this->getTrans('pleaseSelect')?></option>
                <option value="1" <?=($this->get('about') != '' && $this->get('about')->getGrid() === 1) ? 'selected' : '' ?>><?=$this->getTrans('one') ?></option>
                <option value="2" <?=($this->get('about') != '' && $this->get('about')->getGrid() === 2) ? 'selected' : '' ?>><?=$this->getTrans('two') ?></option>
                <option value="3" <?=($this->get('about') != '' && $this->get('about')->getGrid() === 3) ? 'selected' : '' ?>><?=$this->getTrans('three') ?></option>
                <option value="4" <?=($this->get('about') != '' && $this->get('about')->getGrid() === 4) ? 'selected' : '' ?>><?=$this->getTrans('four') ?></option>
            </select>
          </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('link1') ? 'has-error' : '' ?>" id="link1">
        <label for="link1" class="col-lg-2 control-label">
            <?=$this->getTrans('link') ?>:
        </label>
        <div class="col-lg-4">
            <input type="url"
                   class="form-control"
                   id="link1"
                   name="link1"
                   value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getLink1()) : $this->escape($this->originalInput('link1')) ?>" />
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('icon1') ? 'has-error' : '' ?>" id="icon1">
        <label for="icon1" class="col-lg-2 control-label">
            <?=$this->getTrans('icon') ?>:
        </label>
        <div class="col-lg-4">
          <select class="form-control fontawesome-select" id="icon1" name="icon1">
              <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
              <option value="fas fa-globe-europe" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
              <option value="fab fa-facebook-f" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
              <option value="fab fa-twitter" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
              <option value="fab fa-twitch" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
              <option value="fab fa-youtube" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
              <option value="fab fa-discord" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
              <option value="fa fa-instagram" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
              <option value="fa fa-snapchat" <?=($this->get('about') != '' && $this->get('about')->getIcon1() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
          </select>
        </div>
    </div>
    <div clas="hidden" id="link2">
      <h1><?=$this->getTrans('aboutSocial2') ?></h1>
      <div class="form-group <?=$this->validation()->hasError('link2') ? 'has-error' : '' ?>">
          <label for="link2" class="col-lg-2 control-label">
              <?=$this->getTrans('link') ?>:
          </label>
          <div class="col-lg-4">
              <input type="url"
                     class="form-control"
                     id="link2"
                     name="link2"
                     value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getLink2()) : $this->escape($this->originalInput('link2')) ?>" />
          </div>
      </div>
      <div class="form-group hidden <?=$this->validation()->hasError('icon2') ? 'has-error' : '' ?>" id="icon2">
          <label for="icon2" class="col-lg-2 control-label">
              <?=$this->getTrans('icon') ?>:
          </label>
          <div class="col-lg-4">
            <select class="form-control fontawesome-select" id="icon2" name="icon2">
                <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                <option value="fas fa-globe-europe" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
                <option value="fab fa-facebook-f" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
                <option value="fab fa-twitter" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
                <option value="fab fa-twitch" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
                <option value="fab fa-youtube" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
                <option value="fab fa-discord" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
                <option value="fa fa-instagram" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
                <option value="fa fa-snapchat" <?=($this->get('about') != '' && $this->get('about')->getIcon2() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
            </select>
          </div>
      </div>
    </div>
    <div clas="hidden" id="link3">
      <h1><?=$this->getTrans('aboutSocial3') ?></h1>
      <div class="form-group <?=$this->validation()->hasError('link3') ? 'has-error' : '' ?>">
          <label for="link1" class="col-lg-2 control-label">
              <?=$this->getTrans('link') ?>:
          </label>
          <div class="col-lg-4">
              <input type="url"
                     class="form-control"
                     id="link3"
                     name="link3"
                     value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getLink3()) : $this->escape($this->originalInput('link3')) ?>" />
          </div>
      </div>
      <div class="form-group hidden <?=$this->validation()->hasError('icon3') ? 'has-error' : '' ?>" id="icon3">
          <label for="icon3" class="col-lg-2 control-label">
              <?=$this->getTrans('icon') ?>:
          </label>
          <div class="col-lg-4">
            <select class="form-control fontawesome-select" id="icon3" name="icon3">
                <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                <option value="fas fa-globe-europe" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
                <option value="fab fa-facebook-f" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
                <option value="fab fa-twitter" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
                <option value="fab fa-twitch" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
                <option value="fab fa-youtube" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
                <option value="fab fa-discord" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
                <option value="fa fa-instagram" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
                <option value="fa fa-snapchat" <?=($this->get('about') != '' && $this->get('about')->getIcon3() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
            </select>
          </div>
      </div>
    </div>
    <div clas="hidden" id="link4">
        <h1><?=$this->getTrans('aboutSocial4') ?></h1>
      <div class="form-group <?=$this->validation()->hasError('link4') ? 'has-error' : '' ?>">
          <label for="link4" class="col-lg-2 control-label">
              <?=$this->getTrans('link') ?>:
          </label>
          <div class="col-lg-4">
              <input type="url"
                     class="form-control"
                     id="link4"
                     name="link4"
                     value="<?=($this->get('about') != '') ? $this->escape($this->get('about')->getLink4()) : $this->escape($this->originalInput('link4')) ?>" />
          </div>
      </div>
      <div class="form-group hidden <?=$this->validation()->hasError('icon4') ? 'has-error' : '' ?>" id="icon4">
          <label for="icon4" class="col-lg-2 control-label">
              <?=$this->getTrans('icon') ?>:
          </label>
          <div class="col-lg-4">
            <select class="form-control fontawesome-select" id="icon4" name="icon4">
                <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                <option value="fas fa-globe-europe" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
                <option value="fab fa-facebook-f" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
                <option value="fab fa-twitter" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
                <option value="fab fa-twitch" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
                <option value="fab fa-youtube" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
                <option value="fab fa-discord" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
                <option value="fa fa-instagram" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
                <option value="fa fa-snapchat" <?=($this->get('about') != '' && $this->get('about')->getIcon4() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
            </select>
          </div>
      </div>
    </div>

    <script>
    $(document).ready(function() {
        let grids = '<?=($this->get('about') != '' && !empty($this->get('about')->getGrid())) ? $this->get('about')->getGrid() : '' ?>';

        if (grids !== '') {
            $('[name="grid"]').val(grids).change();
            $('[name="grid"]').click();
        }
    });

    $('[name="grid"]').click(function () {
        switch($(this).val()) {
            case "1":
                $('#icon1').removeClass('hidden');
                $('#link1').removeClass('hidden');
                $('#icon2').addClass('hidden');
                $('#link2').addClass('hidden');
                $('#icon3').addClass('hidden');
                $('#link3').addClass('hidden');
                $('#icon4').addClass('hidden');
                $('#link4').addClass('hidden');
                break;
            case "2":
                $('#icon1').removeClass('hidden');
                $('#link1').removeClass('hidden');
                $('#icon2').removeClass('hidden');
                $('#link2').removeClass('hidden');
                $('#icon3').addClass('hidden');
                $('#link3').addClass('hidden');
                $('#icon4').addClass('hidden');
                $('#link4').addClass('hidden');
                break;
            case "3":
                $('#icon1').removeClass('hidden');
                $('#link1').removeClass('hidden');
                $('#icon2').removeClass('hidden');
                $('#link2').removeClass('hidden');
                $('#icon3').removeClass('hidden');
                $('#link3').removeClass('hidden');
                $('#icon4').addClass('hidden');
                $('#link4').addClass('hidden');
                break;
            case "4":
                $('#icon1').removeClass('hidden');
                $('#link1').removeClass('hidden');
                $('#icon2').removeClass('hidden');
                $('#link2').removeClass('hidden');
                $('#icon3').removeClass('hidden');
                $('#link3').removeClass('hidden');
                $('#icon4').removeClass('hidden');
                $('#link4').removeClass('hidden');
                break;
            default:
                // $('#box1').addClass('hidden');
                // $('#box2').addClass('hidden');
                // $('#box3').addClass('hidden');
                // $('#box4').addClass('hidden');
        }
    });
    </script>

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
