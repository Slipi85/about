<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Modules\About\Controllers;
use Modules\About\Mappers\About as AboutMapper;

class Index extends \Ilch\Controller\Frontend
{
    public function init()
    {
    }

    public function indexAction()
    {
      $aboutMapper = new AboutMapper();
      $about = $aboutMapper->getAbout();
      $this->getView()->set('abouts', $about);
    }
}
