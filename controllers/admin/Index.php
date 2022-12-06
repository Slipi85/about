<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Controllers\Admin;

use Ilch\Controller\Admin;
use Modules\About\Mappers\About as AboutMapper;
use Modules\About\Models\About as AboutModel;
use Ilch\Validation;

class Index extends Admin
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

        $this->getLayout()->addMenu(
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
        $model = new AboutModel();

        $this->getLayout()->getAdminHmenu()
            ->add($this->getTranslator()->trans('menuAbout'), ['action' => 'index']);
        if ($this->getRequest()->getParam('id')) {
            $this->getLayout()->getAdminHmenu()
                ->add($this->getTranslator()->trans('edit'), ['action' => 'treat']);

            $model = $aboutMapper->getAboutById($this->getRequest()->getParam('id'));
        } else {
            $this->getLayout()->getAdminHmenu()
                ->add($this->getTranslator()->trans('add'), ['action' => 'treat']);
        }
        $this->getView()->set('about', $model);

        if ($this->getRequest()->isPost()) {
            $validator = [
                'titel' => 'required',
                'text' => 'required',
                'bimg' => 'required',
                'grid' => 'required|numeric|min:1|max:4',
            ];

            switch ($this->getRequest()->getPost('grid')) {
                case 4:
                    $validator['link4'] = 'required|url';
                    $validator['icon4'] = 'required';
                // no break
                case 3:
                    $validator['link3'] = 'required|url';
                    $validator['icon3'] = 'required';
                // no break
                case 2:
                    $validator['link2'] = 'required|url';
                    $validator['icon2'] = 'required';
                // no break
                case 1:
                    $validator['link1'] = 'required|url';
                    $validator['icon1'] = 'required';
                // no break
            }

            $validation = Validation::create($this->getRequest()->getPost(), $validator);

            if ($validation->isValid()) {
                $model->setTitel($this->getRequest()->getPost('titel'))
                    ->setImg($this->getRequest()->getPost('img'))
                    ->setText($this->getRequest()->getPost('text'))
                    ->setGrid($this->getRequest()->getPost('grid'))
                    ->setBimg($this->getRequest()->getPost('bimg'));

                $model->setLink1($this->getRequest()->getPost('link1') ?? '')
                    ->setIcon1($this->getRequest()->getPost('icon1') ?? '')
                    ->setLink2($this->getRequest()->getPost('link2') ?? '')
                    ->setIcon2($this->getRequest()->getPost('icon2') ?? '')
                    ->setLink3($this->getRequest()->getPost('link3') ?? '')
                    ->setIcon3($this->getRequest()->getPost('icon3') ?? '')
                    ->setLink4($this->getRequest()->getPost('link4') ?? '')
                    ->setIcon4($this->getRequest()->getPost('icon4') ?? '');

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
