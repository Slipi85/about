<h1><?=$this->getTrans('manage') ?></h1>
<?php if ($this->get('abouts')): ?>
    <form class="form-horizontal" method="POST">
        <?=$this->getTokenField() ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="icon_width">
                    <col class="icon_width">
                    <col class="col-lg-2">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th><?=$this->getCheckAllCheckbox('check_about') ?></th>
                        <th></th>
                        <th></th>
                        <th><?=$this->getTrans('titel') ?></th>
                        <th><?=$this->getTrans('text') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->get('abouts') as $about): ?>
                        <tr>
                            <td><?=$this->getDeleteCheckbox('check_about', $about->getId()) ?></td>
                            <td><?=$this->getEditIcon(['action' => 'treat', 'id' => $about->getId()]) ?></td>
                            <td><?=$this->getDeleteIcon(['action' => 'delabout', 'id' => $about->getId()]) ?></td>
                            <td><?=$this->escape($about->getTitel()) ?></td>
                            <td><?=$this->escape($about->getText()) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?=$this->getListBar(['delete' => 'delete']) ?>
    </form>
<?php else: ?>
    <?=$this->getTrans('noAbout') ?>
<?php endif; ?>
