<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Boxes;

use Ilch\Box;
use Modules\About\Mappers\About as AboutMapper;

class About extends Box
{
    public function render()
    {
        $aboutMapper = new AboutMapper();

        $abouts = $aboutMapper->getAbout();
        $this->getView()->set('abouts', $abouts);
    }
}
