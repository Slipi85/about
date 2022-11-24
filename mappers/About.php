<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Modules\About\Mappers;
use Modules\About\Models\About as AboutModel;

class About extends \Ilch\Mapper
{
  /**
     * Get about (optionally with a condition)
     *
     * @param array $where
     * @return array|AboutModel[]
     */
    public function getAbout($where = [])
    {
        $aboutArray = $this->db()->select('*')
            ->from('about')
            ->where($where)
            ->execute()
            ->fetchRows();

        if (empty($aboutArray)) {
            return [];
        }

        $abouts = [];
        foreach ($aboutArray as $aboutRow) {
            $aboutModel = new AboutModel();
            $aboutModel->setId($aboutRow['id']);
            $aboutModel->setTitel($aboutRow['titel']);
            $aboutModel->setImg($aboutRow['img']);
            $aboutModel->setText($aboutRow['text']);
            $aboutModel->setGrid($aboutRow['grid']);
            $aboutModel->setIcon1($aboutRow['icon1']);
            $aboutModel->setLink1($aboutRow['link1']);
            $aboutModel->setIcon2($aboutRow['icon2']);
            $aboutModel->setLink2($aboutRow['link2']);
            $aboutModel->setIcon3($aboutRow['icon3']);
            $aboutModel->setLink3($aboutRow['link3']);
            $aboutModel->setIcon4($aboutRow['icon4']);
            $aboutModel->setLink4($aboutRow['link4']);
            $aboutModel->setBimg($aboutRow['bimg']);

            $about[] = $aboutModel;
        }

        return $about;
    }

    /**
     * Get about by id.
     *
     * @param $id
     * @return mixed
     */
    public function getAboutById($id)
    {
        $about = $this->getAbout(['id' => $id]);
        return reset($about);
    }

    /**
     * Save about to database.
     *
     * @param AboutModel $social
     */
    public function save(AboutModel $about)
    {
        $fields = [
            'id' => $about->getId(),
            'titel' => $about->getTitel(),
            'img' => $about->getImg(),
            'text' => $about->getText(),
            'grid' => $about->getGrid(),
            'icon1' => $about->getIcon1(),
            'link1' => $about->getLink1(),
            'icon2' => $about->getIcon2(),
            'link2' => $about->getLink2(),
            'icon3' => $about->getIcon3(),
            'link3' => $about->getLink3(),
            'icon4' => $about->getIcon4(),
            'link4' => $about->getLink4(),
            'bimg' => $about->getBimg()
        ];

        if ($about->getId()) {
            $this->db()->update('about')
                ->values($fields)
                ->where(['id' => $about->getId()])
                ->execute();
        } else {
            $this->db()->insert('about')
                ->values($fields)
                ->execute();
        }
    }

    /**
     * Delete about by id.
     *
     * @param $id
     */
    public function delete($id)
    {
        $this->db()->delete('about')
            ->where(['id' => $id])
            ->execute();
    }
}
