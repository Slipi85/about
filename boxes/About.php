<?php

namespace Modules\About\Boxes;

use Modules\About\Mappers\About as AboutMapper;

class About extends \Ilch\Box
{
    public function render()
    {
        $aboutMapper = new AboutMapper();

        $abouts = $aboutMapper->getAbout();
        $this->getView()->set('abouts', $abouts);
    }
}
