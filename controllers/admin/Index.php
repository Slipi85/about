<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Modules\About\Controllers\Admin;

use Modules\About\Mappers\About as AboutMapper;
use Modules\About\Models\About as AboutModel;
use Ilch\Validation;

class Index extends \Ilch\Controller\Admin
{
    public function init()
    {
      $items = [
            [
                'name' => 'manage',
                'active' => false,
                'icon' => 'fa fa-th-list',
                'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'index']),
                [
                    'name' => 'add',
                    'active' => false,
                    'icon' => 'fa fa-plus-circle',
                    'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'treat'])
                ]
            ],
        ];

        if ($this->getRequest()->getActionName() === 'treat') {
            $items[0][0]['active'] = true;
        } else {
            $items[0]['active'] = true;
        }

        $this->getLayout()->addMenu
        (
            'menuAbout',
            $items
        );
    }

    public function indexAction()
    {
      $aboutMapper = new AboutMapper();

        $this->getLayout()->getAdminHmenu()
                ->add($this->getTranslator()->trans('menuAbout'), ['action' => 'index']);

        if ($this->getRequest()->getPost('action') === 'delete' && $this->getRequest()->getPost('check_about')) {
            foreach ($this->getRequest()->getPost('check_about') as $aboutId) {
                $aboutMapper->delete($aboutId);
            }
        }

        $this->getView()->set('abouts', $aboutMapper->getAbout());
    }
    public function treatAction()
    {
        $aboutMapper = new AboutMapper();

        if ($this->getRequest()->getParam('id')) {
            $this->getLayout()->getAdminHmenu()
                    ->add($this->getTranslator()->trans('menuAbout'), ['action' => 'index'])
                    ->add($this->getTranslator()->trans('edit'), ['action' => 'treat']);

            $this->getView()->set('about', $aboutMapper->getAboutById($this->getRequest()->getParam('id')));
        } else {
            $this->getLayout()->getAdminHmenu()
                    ->add($this->getTranslator()->trans('menuAbout'), ['action' => 'index'])
                    ->add($this->getTranslator()->trans('add'), ['action' => 'treat']);
        }

        if ($this->getRequest()->isPost()) {
            $validation = Validation::create($this->getRequest()->getPost(), [
                'titel' => 'required',
                'img' => 'required',
                'text' => 'required'
            ]);

            if ($validation->isValid()) {
                $model = new AboutModel();

                if ($this->getRequest()->getParam('id')) {
                    $model->setId($this->getRequest()->getParam('id'));
                }

                $model->setLink1($this->getRequest()->getPost('link1'));
                $model->setIcon1($this->getRequest()->getPost('icon1'));
                $model->setLink2($this->getRequest()->getPost('link2'));
                $model->setIcon2($this->getRequest()->getPost('icon2'));
                $model->setLink3($this->getRequest()->getPost('link3'));
                $model->setIcon3($this->getRequest()->getPost('icon3'));
                $model->setLink4($this->getRequest()->getPost('link4'));
                $model->setIcon4($this->getRequest()->getPost('icon4'));
                $model->setTitel($this->getRequest()->getPost('titel'));
                $model->setGrid($this->getRequest()->getPost('grid'));
                $model->setImg($this->getRequest()->getPost('img'));
                $model->setText($this->getRequest()->getPost('text'));
                $model->setBimg($this->getRequest()->getPost('bimg'));
                $aboutMapper->save($model);

                $this->addMessage('saveSuccess');
                $this->redirect(['action' => 'index']);
            } else {
                $this->addMessage($validation->getErrorBag()->getErrorMessages(), 'danger', true);
                $this->redirect()
                  ->withInput()
                  ->withErrors($validation->getErrorBag())
                  ->to(['action' => 'treat', 'id' => $this->getRequest()->getParam('id')]);
            }
        }

        $this->getView()->set('abouts', $aboutMapper->getAbout());
    }

    public function delAboutAction()
    {
        if ($this->getRequest()->isSecure()) {
            $aboutMapper = new AboutMapper();
            $aboutMapper->delete($this->getRequest()->getParam('id'));

            $this->addMessage('deleteSuccess');
        }

        $this->redirect(['action' => 'index']);
    }
}
