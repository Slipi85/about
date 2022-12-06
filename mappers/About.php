<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Mappers;

use Ilch\Database\Mysql\Result;
use Ilch\Mapper;
use Modules\About\Models\About as EntriesModel;
use Ilch\Pagination;

class About extends Mapper
{
    /**
     * @param array $where
     * @param array $orderBy
     * @param Pagination|null $pagination
     * @return array|null
     */
    public function getEntriesBy(array $where = [], array $orderBy = ['id' => 'ASC'], ?Pagination $pagination = null): ?array
    {
        $select = $this->db()->select()
            ->fields(['*'])
            ->from(['about'])
            ->where($where)
            ->order($orderBy);

        if ($pagination !== null) {
            $select->limit($pagination->getLimit())
                ->useFoundRows();
            $result = $select->execute();
            $pagination->setRows($result->getFoundRows());
        } else {
            $result = $select->execute();
        }

        $entryArray = $result->fetchRows();

        if (empty($entryArray)) {
            return null;
        }
        $entrys = [];

        foreach ($entryArray as $entries) {
            $entryModel = new EntriesModel();

            $entryModel->setByArray($entries);

            $entrys[] = $entryModel;
        }
        return $entrys;
    }

    /**
     * @param array $where
     * @return array|null
     */
    public function getAbout(array $where = []): ?array
    {
        return $this->getEntriesBy($where, []);
    }

    /**
     * @param int $id
     * @return EntriesModel|null
     */
    public function getAboutById(int $id): ?EntriesModel
    {
        $entrys = $this->getEntriesBy(['id' => $id], []);

        if (!empty($entrys)) {
            return reset($entrys);
        }

        return null;
    }

    /**
     * @param EntriesModel $model
     * @return int
     */
    public function save(EntriesModel $model): int
    {
        $fields = $model->getArray();

        if ($model->getId()) {
            $this->db()->update('about')
                ->values($fields)
                ->where(['id' => $model->getId()])
                ->execute();
            $result = $model->getId();
        } else {
            $result = $this->db()->insert('about')
                ->values($fields)
                ->execute();
        }

        return $result;
    }

    /**
     * @param int $id
     * @return Result|int
     */
    public function delete(int $id)
    {
        return $this->db()->delete('about')
            ->where(['id' => $id])
            ->execute();
    }
}
