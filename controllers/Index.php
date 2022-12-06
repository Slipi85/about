<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Controllers;
use Ilch\Controller\Frontend;
use Modules\About\Mappers\About as AboutMapper;

class Index extends Frontend
{
    public function indexAction()
    {
      $aboutMapper = new AboutMapper();
      $about = $aboutMapper->getAbout();
      $this->getView()->set('abouts', $about);
    }
}
