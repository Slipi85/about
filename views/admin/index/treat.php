<?php $entrie = $this->get('about'); ?>
<h1><?=$entrie ? $this->getTrans('edit') : $this->getTrans('add') ?></h1>
<h1><?=$this->getTrans('aboutMe') ?></h1>
<form class="form-horizontal" method="POST">
    <?=$this->getTokenField() ?>

    <div class="form-group <?=$this->validation()->hasError('titel') ? 'has-error' : '' ?>">
        <label for="titel" class="col-lg-2 control-label">
            <?=$this->getTrans('titel') ?>:
        </label>
        <div class="col-lg-4">
            <input type="text"
                class="form-control"
                id="titel"
                name="titel"
                value="<?=$this->escape($this->originalInput('about', ($entrie->getId()?$entrie->getTitel():''))) ?>" />
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
        <label for="ck_1" class="col-lg-2 control-label">
            <?=$this->getTrans('text') ?>:
        </label>
        <div class="col-lg-4">
            <textarea class="form-control ckeditor"
                id="ck_1"
                name="text"
                toolbar="ilch_html"><?=$this->originalInput('text', ($entrie->getId()?$entrie->getText():'')) ?></textarea>
        </div>
    </div>
    <h1><?=$this->getTrans('aboutImg') ?></h1>
    <div class="form-group <?=$this->validation()->hasError('img') ? 'has-error' : '' ?>">
        <label for="selectedImage" class="col-lg-2 control-label">
            <?=$this->getTrans('img') ?>:
        </label>
        <div class="col-lg-4">
            <div class="input-group">
                <input type="text"
                    class="form-control"
                    id="selectedImage"
                    name="img"
                    value="<?=$this->escape($this->originalInput('img', ($entrie->getId()?$entrie->getImg():''))) ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('bimg') ? 'has-error' : '' ?>">
        <label for="bimg" class="col-lg-2 control-label">
            <?=$this->getTrans('bimg') ?>:
        </label>
        <div class="col-lg-4">
            <select class="form-control fontawesome-select" id="bimg" name="bimg">
                <option value="" disabled <?=($this->originalInput('bimg', ($entrie->getId()?$entrie->getBimg():''))) == '' ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect') ?></option>
                <option value="circle" <?=($this->originalInput('bimg', ($entrie->getId()?$entrie->getBimg():''))) == 'circle' ? 'selected=""' : '' ?>><?=$this->getTrans('circle') ?></option>
                <option value="img-thumbnail" <?=($this->originalInput('bimg', ($entrie->getId()?$entrie->getBimg():''))) == 'img-thumbnail' ? 'selected=""' : '' ?>><?=$this->getTrans('thumbnail') ?></option>
                <option value="rounded" <?=($this->originalInput('bimg', ($entrie->getId()?$entrie->getBimg():''))) == 'rounded' ? 'selected=""' : '' ?>><?=$this->getTrans('rounded') ?></option>
            </select>
        </div>
    </div>
    <div class="form-group <?=$this->validation()->hasError('grid') ? 'has-error' : '' ?>">
        <label for="grid" class="col-lg-2 control-label">
            <?=$this->getTrans('grid') ?>:
        </label>
        <div class="col-lg-4">
            <select class="form-control" id="grid" name="grid">
                <option value="" disabled <?=($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():0))) == 0 ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect')?></option>
                <option value="1" <?=($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():0))) == 1 ? 'selected=""' : '' ?>><?=$this->getTrans('one') ?></option>
                <option value="2" <?=($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():0))) == 2 ? 'selected=""' : '' ?>><?=$this->getTrans('two') ?></option>
                <option value="3" <?=($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():0))) == 3 ? 'selected=""' : '' ?>><?=$this->getTrans('three') ?></option>
                <option value="4" <?=($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():0))) == 4 ? 'selected=""' : '' ?>><?=$this->getTrans('four') ?></option>
            </select>
        </div>
    </div>
    <div class="hidden" id="linkicon1_div">
        <h1><?=$this->getTrans('aboutSocial') ?></h1>
        <div class="form-group <?=$this->validation()->hasError('link1') ? 'has-error' : '' ?>">
            <label for="link1" class="col-lg-2 control-label">
                <?=$this->getTrans('link') ?>:
            </label>
            <div class="col-lg-4">
                <input type="text"
                    class="form-control"
                    id="link1"
                    name="link1"
                    value="<?=$this->escape($this->originalInput('link1', ($entrie->getId()?$entrie->getLink1():''))) ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('icon1') ? 'has-error' : '' ?>">
            <label for="icon1" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
                <select class="form-control fontawesome-select" id="icon1" name="icon1">
                    <option value="" disabled <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == '' ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect') ?></option>
                    <option value="fas fa-globe-europe" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fas fa-globe-europe' ? 'selected=""' : '' ?>> Globus</option>
                    <option value="fab fa-facebook-f" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fab fa-facebook-f' ? 'selected=""' : '' ?>> Facebook</option>
                    <option value="fab fa-twitter" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fab fa-twitter' ? 'selected=""' : '' ?>> Twitter</option>
                    <option value="fab fa-twitch" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fab fa-twitch' ? 'selected=""' : '' ?>> Twitch</option>
                    <option value="fab fa-youtube" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fab fa-youtube' ? 'selected=""' : '' ?>> Youtube</option>
                    <option value="fab fa-discord" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fab fa-discord' ? 'selected=""' : '' ?>> Discord</option>
                    <option value="fa fa-instagram" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fa fa-instagram' ? 'selected=""' : '' ?>> Instagram</option>
                    <option value="fa fa-snapchat" <?=($this->originalInput('icon1', ($entrie->getId()?$entrie->getIcon1():''))) == 'fa fa-snapchat' ? 'selected=""' : '' ?>> Snapchat</option>
                </select>
            </div>
        </div>
    </div>
    <div class="hidden" id="linkicon2_div">
        <h1><?=$this->getTrans('aboutSocial2') ?></h1>
        <div class="form-group <?=$this->validation()->hasError('link2') ? 'has-error' : '' ?>">
            <label for="link2" class="col-lg-2 control-label">
                <?=$this->getTrans('link') ?>:
            </label>
            <div class="col-lg-4">
                <input type="text"
                    class="form-control"
                    id="link2"
                    name="link2"
                    value="<?=$this->escape($this->originalInput('link2', ($entrie->getId()?$entrie->getLink2():''))) ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('icon2') ? 'has-error' : '' ?>">
            <label for="icon2" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
                <select class="form-control fontawesome-select" id="icon2" name="icon2">
                    <option value="" disabled <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == '' ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect') ?></option>
                    <option value="fas fa-globe-europe" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fas fa-globe-europe' ? 'selected=""' : '' ?>> Globus</option>
                    <option value="fab fa-facebook-f" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fab fa-facebook-f' ? 'selected=""' : '' ?>> Facebook</option>
                    <option value="fab fa-twitter" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fab fa-twitter' ? 'selected=""' : '' ?>> Twitter</option>
                    <option value="fab fa-twitch" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fab fa-twitch' ? 'selected=""' : '' ?>> Twitch</option>
                    <option value="fab fa-youtube" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fab fa-youtube' ? 'selected=""' : '' ?>> Youtube</option>
                    <option value="fab fa-discord" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fab fa-discord' ? 'selected=""' : '' ?>> Discord</option>
                    <option value="fa fa-instagram" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fa fa-instagram' ? 'selected=""' : '' ?>> Instagram</option>
                    <option value="fa fa-snapchat" <?=($this->originalInput('icon2', ($entrie->getId()?$entrie->getIcon2():''))) == 'fa fa-snapchat' ? 'selected=""' : '' ?>> Snapchat</option>
                </select>
            </div>
        </div>
    </div>
    <div class="hidden" id="linkicon3_div">
        <h1><?=$this->getTrans('aboutSocial3') ?></h1>
        <div class="form-group <?=$this->validation()->hasError('link3') ? 'has-error' : '' ?>">
            <label for="link3" class="col-lg-2 control-label">
                <?=$this->getTrans('link') ?>:
            </label>
            <div class="col-lg-4">
                <input type="text"
                    class="form-control"
                    id="link3"
                    name="link3"
                    value="<?=$this->escape($this->originalInput('link3', ($entrie->getId()?$entrie->getLink3():''))) ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('icon3') ? 'has-error' : '' ?>">
            <label for="icon3" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
                <select class="form-control fontawesome-select" id="icon3" name="icon3">
                    <option value="" disabled <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == '' ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect') ?></option>
                    <option value="fas fa-globe-europe" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fas fa-globe-europe' ? 'selected=""' : '' ?>> Globus</option>
                    <option value="fab fa-facebook-f" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fab fa-facebook-f' ? 'selected=""' : '' ?>> Facebook</option>
                    <option value="fab fa-twitter" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fab fa-twitter' ? 'selected=""' : '' ?>> Twitter</option>
                    <option value="fab fa-twitch" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fab fa-twitch' ? 'selected=""' : '' ?>> Twitch</option>
                    <option value="fab fa-youtube" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fab fa-youtube' ? 'selected=""' : '' ?>> Youtube</option>
                    <option value="fab fa-discord" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fab fa-discord' ? 'selected=""' : '' ?>> Discord</option>
                    <option value="fa fa-instagram" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fa fa-instagram' ? 'selected=""' : '' ?>> Instagram</option>
                    <option value="fa fa-snapchat" <?=($this->originalInput('icon3', ($entrie->getId()?$entrie->getIcon3():''))) == 'fa fa-snapchat' ? 'selected=""' : '' ?>> Snapchat</option>
                </select>
            </div>
        </div>
    </div>
    <div class="hidden" id="linkicon4_div">
        <h1><?=$this->getTrans('aboutSocial4') ?></h1>
        <div class="form-group <?=$this->validation()->hasError('link4') ? 'has-error' : '' ?>">
            <label for="link4" class="col-lg-2 control-label">
                <?=$this->getTrans('link') ?>:
            </label>
            <div class="col-lg-4">
                <input type="text"
                    class="form-control"
                    id="link4"
                    name="link4"
                    value="<?=$this->escape($this->originalInput('link4', ($entrie->getId()?$entrie->getLink4():''))) ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('icon4') ? 'has-error' : '' ?>">
            <label for="icon4" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
                <select class="form-control fontawesome-select" id="icon4" name="icon4">
                    <option value="" disabled <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == '' ? 'selected=""' : '' ?>><?=$this->getTrans('pleaseSelect') ?></option>
                    <option value="fas fa-globe-europe" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fas fa-globe-europe' ? 'selected=""' : '' ?>> Globus</option>
                    <option value="fab fa-facebook-f" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fab fa-facebook-f' ? 'selected=""' : '' ?>> Facebook</option>
                    <option value="fab fa-twitter" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fab fa-twitter' ? 'selected=""' : '' ?>> Twitter</option>
                    <option value="fab fa-twitch" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fab fa-twitch' ? 'selected=""' : '' ?>> Twitch</option>
                    <option value="fab fa-youtube" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fab fa-youtube' ? 'selected=""' : '' ?>> Youtube</option>
                    <option value="fab fa-discord" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fab fa-discord' ? 'selected=""' : '' ?>> Discord</option>
                    <option value="fa fa-instagram" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fa fa-instagram' ? 'selected=""' : '' ?>> Instagram</option>
                    <option value="fa fa-snapchat" <?=($this->originalInput('icon4', ($entrie->getId()?$entrie->getIcon4():''))) == 'fa fa-snapchat' ? 'selected=""' : '' ?>> Snapchat</option>
                </select>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            let grids = '<?=$this->escape($this->originalInput('grid', ($entrie->getId()?$entrie->getGrid():''))) ?>';

            if (grids !== '') {
                $('#grid').val(grids).change().click();
            }
        });

        $('#grid').click(function () {
            let linkicon1_div = $('#linkicon1_div');
            let linkicon2_div = $('#linkicon2_div');
            let linkicon3_div = $('#linkicon3_div');
            let linkicon4_div = $('#linkicon4_div');

            switch($(this).val()) {
                case "1":
                    linkicon1_div.removeClass('hidden');
                    linkicon2_div.addClass('hidden');
                    linkicon3_div.addClass('hidden');
                    linkicon4_div.addClass('hidden');
                    break;
                case "2":
                    linkicon1_div.removeClass('hidden');
                    linkicon2_div.removeClass('hidden');
                    linkicon3_div.addClass('hidden');
                    linkicon4_div.addClass('hidden');
                    break;
                case "3":
                    linkicon1_div.removeClass('hidden');
                    linkicon2_div.removeClass('hidden');
                    linkicon3_div.removeClass('hidden');
                    linkicon4_div.addClass('hidden');
                    break;
                case "4":
                    linkicon1_div.removeClass('hidden');
                    linkicon2_div.removeClass('hidden');
                    linkicon3_div.removeClass('hidden');
                    linkicon4_div.removeClass('hidden');
                    break;
                default:
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
    <?=$entrie ? $this->getSaveBar('updateButton') : $this->getSaveBar('addButton') ?>
</form>
