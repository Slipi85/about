<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Models;

use Ilch\Model;

class About extends Model
{
  /**
     * @var int
     */
    protected $id = 0;

    /**
     * @var string
     */
    protected $titel = '';

    /**
     * @var string
     */
    protected $img = '';

    /**
     * @var string
     */
    protected $text = '';

    /**
     * @var string
     */
    protected $icon1 = '';

    /**
     * @var string
     */
    protected $link1 = '';

    /**
     * @var string
     */
    protected $icon2 = '';

    /**
     * @var string
     */
    protected $link2 = '';

    /**
     * @var string
     */
    protected $icon3 = '';

    /**
     * @var string
     */
    protected $link3 = '';

    /**
     * @var string
     */
    protected $icon4 = '';

    /**
     * @var string
     */
    protected $link4 = '';

    /**
     * @var int
     */
    protected $grid = '';

    /**
     * @var string
     */
    protected $bimg = '';



    /**
     * @param array $entries
     * @return $this
     */
    public function setByArray(array $entries): About
    {
        if (isset($entries['id'])) {
            $this->setId($entries['id']);
        }
        if (isset($entries['titel'])) {
            $this->setTitel($entries['titel']);
        }
        if (isset($entries['img'])) {
            $this->setImg($entries['img']);
        }
        if (isset($entries['text'])) {
            $this->setText($entries['text']);
        }
        if (isset($entries['grid'])) {
            $this->setGrid($entries['grid']);
        }
        if (isset($entries['icon1'])) {
            $this->setIcon1($entries['icon1']);
        }
        if (isset($entries['link1'])) {
            $this->setLink1($entries['link1']);
        }
        if (isset($entries['icon2'])) {
            $this->setIcon2($entries['icon2']);
        }
        if (isset($entries['link2'])) {
            $this->setLink2($entries['link2']);
        }
        if (isset($entries['icon3'])) {
            $this->setIcon3($entries['icon3']);
        }
        if (isset($entries['link3'])) {
            $this->setLink3($entries['link3']);
        }
        if (isset($entries['icon4'])) {
            $this->setIcon4($entries['icon4']);
        }
        if (isset($entries['link4'])) {
            $this->setLink4($entries['link4']);
        }
        if (isset($entries['bimg'])) {
            $this->setBimg($entries['bimg']);
        }
        return $this;
    }

    /**
     * @return int
     */
     public function getId(): int
     {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): About
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     * @return $this
     */
    public function setTitel(string $titel): About
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return $this
     */
    public function setImg(string $img): About
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text): About
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon1(): string
    {
        return $this->icon1;
    }

    /**
     * @param string $icon1
     * @return $this
     */
    public function setIcon1(string $icon1): About
    {
        $this->icon1 = $icon1;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink1(): string
    {
        return $this->link1;
    }

    /**
     * @param string $link1
     * @return $this
     */
    public function setLink1(string $link1): About
    {
        $this->link1 = $link1;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon2(): string
    {
        return $this->icon2;
    }

    /**
     * @param string $icon2
     * @return $this
     */
    public function setIcon2(string $icon2): About
    {
        $this->icon2 = $icon2;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink2(): string
    {
        return $this->link2;
    }

    /**
     * @param string $link2
     * @return $this
     */
    public function setLink2(string $link2): About
    {
        $this->link2 = $link2;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon3(): string
    {
        return $this->icon3;
    }

    /**
     * @param string $icon3
     * @return $this
     */
    public function setIcon3(string $icon3): About
    {
        $this->icon3 = $icon3;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink3(): string
    {
        return $this->link3;
    }

    /**
     * @param string $link3
     * @return $this
     */
    public function setLink3(string $link3): About
    {
        $this->link3 = $link3;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon4(): string
    {
        return $this->icon4;
    }

    /**
     * @param string $icon4
     * @return $this
     */
    public function setIcon4(string $icon4): About
    {
        $this->icon4 = $icon4;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink4(): string
    {
        return $this->link4;
    }

    /**
     * @param string $link4
     * @return $this
     */
    public function setLink4(string $link4): About
    {
        $this->link4 = $link4;

        return $this;
    }

    /**
     * @return int
     */
    public function getGrid(): int
    {
        return $this->grid;
    }

    /**
     * @param int $grid
     * @return $this
     */
    public function setGrid(int $grid): About
    {
        $this->grid = $grid;

        return $this;
    }

    /**
     * @return string
     */
    public function getBimg(): string
    {
        return $this->bimg;
    }

    /**
     * @param string $bimg
     * @return $this
     */
    public function setBimg(string $bimg): About
    {
        $this->bimg = $bimg;

        return $this;
    }

    /**
     * @param bool $withId
     * @return array
     */
    public function getArray(bool $withId = true): array
    {
        return array_merge(
            ($withId ? ['id' => $this->getId()] : []),
            [
                'titel' => $this->getTitel(),
                'img' => $this->getImg(),
                'text' => $this->getText(),
                'grid' => $this->getGrid(),
                'icon1' => $this->getIcon1(),
                'link1' => $this->getLink1(),
                'icon2' => $this->getIcon2(),
                'link2' => $this->getLink2(),
                'icon3' => $this->getIcon3(),
                'link3' => $this->getLink3(),
                'icon4' => $this->getIcon4(),
                'link4' => $this->getLink4(),
                'bimg' => $this->getBimg()
            ]
        );
    }
}
