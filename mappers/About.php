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
            $aboutModel->setIcon($aboutRow['icon']);
            $aboutModel->setLink($aboutRow['link']);

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
            'icon' => $about->getIcon(),
            'link' => $about->getLink()
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
