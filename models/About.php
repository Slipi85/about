<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Modules\About\Models;

class About extends \Ilch\Model
{
  /**
     * The id of the about.
     *
     * @var int
     */
    protected $id;

    /**
     * The titel of the about.
     *
     * @var string
     */
    protected $titel;

    /**
     * The Img of the about.
     *
     * @var string
     */
    protected $img;

    /**
     * The Text of the about.
     *
     * @var string
     */
    protected $text;
    /**
     * The Icon1 of the about.
     *
     * @var string
     */
    protected $icon1;
    /**
     * The link1 of the about.
     *
     * @var string
     */
    protected $link1;
    /**
     * The Icon2 of the about.
     *
     * @var string
     */
    protected $icon2;
    /**
     * The link2 of the about.
     *
     * @var string
     */
    protected $link2;
    /**
     * The Icon3 of the about.
     *
     * @var string
     */
    protected $icon3;
    /**
     * The link3 of the about.
     *
     * @var string
     */
    protected $link3;
    /**
     * The Icon4 of the about.
     *
     * @var string
     */
    protected $icon4;
    /**
     * The link4 of the about.
     *
     * @var string
     */
    protected $link4;
    /**
     * The grid of the about.
     *
     * @var string
     */
    protected $grid;
    /**
     * The Bimg of the about.
     *
     * @var string
     */
    protected $bimg;

    /**
     * Gets the id of the about.
     *
     * @return int
     */
     public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the about.
     *
     * @param int $id
     * @return this
     */
    public function setId($id)
    {
        $this->id = (int)$id;

        return $this;
    }

    /**
     * Gets the titel of the about.
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets the titel of the about.
     *
     * @param string $titel
     * @return this
     */
    public function setTitel($titel)
    {
        $this->titel = (string)$titel;

        return $this;
    }

    /**
     * Gets the link of the about.
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Sets the link of the about.
     *
     * @param string $answer
     * @return this
     */
    public function setImg($img)
    {
        $this->img = (string)$img;

        return $this;
    }

    /**
     * Gets the text of the about.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text of the about.
     *
     * @param string $text
     * @return this
     */
    public function setText($text)
    {
        $this->text = (string)$text;

        return $this;
    }
    /**
     * Gets the icon1 of the about.
     *
     * @return string
     */
    public function getIcon1()
    {
        return $this->icon1;
    }

    /**
     * Sets the icon1 of the about.
     *
     * @param string $icon1
     * @return this
     */
    public function setIcon1($icon1)
    {
        $this->icon1 = (string)$icon1;

        return $this;
    }
    /**
     * Gets the link1 of the about.
     *
     * @return string
     */
    public function getLink1()
    {
        return $this->link1;
    }

    /**
     * Sets the link of the about.
     *
     * @param string $link1
     * @return this
     */
    public function setLink1($link1)
    {
        $this->link1 = (string)$link1;

        return $this;
    }
    /**
     * Gets the icon2 of the about.
     *
     * @return string
     */
    public function getIcon2()
    {
        return $this->icon2;
    }

    /**
     * Sets the icon2 of the about.
     *
     * @param string $icon2
     * @return this
     */
    public function setIcon2($icon2)
    {
        $this->icon2 = (string)$icon2;

        return $this;
    }
    /**
     * Gets the link2 of the about.
     *
     * @return string
     */
    public function getLink2()
    {
        return $this->link2;
    }

    /**
     * Sets the link2 of the about.
     *
     * @param string $link2
     * @return this
     */
    public function setLink2($link2)
    {
        $this->link2 = (string)$link2;

        return $this;
    }
    /**
     * Gets the icon3 of the about.
     *
     * @return string
     */
    public function getIcon3()
    {
        return $this->icon3;
    }

    /**
     * Sets the icon3 of the about.
     *
     * @param string $icon3
     * @return this
     */
    public function setIcon3($icon3)
    {
        $this->icon3 = (string)$icon3;

        return $this;
    }
    /**
     * Gets the link3 of the about.
     *
     * @return string
     */
    public function getLink3()
    {
        return $this->link3;
    }

    /**
     * Sets the link3 of the about.
     *
     * @param string $link3
     * @return this
     */
    public function setLink3($link3)
    {
        $this->link3 = (string)$link3;

        return $this;
    }
    /**
     * Gets the icon4 of the about.
     *
     * @return string
     */
    public function getIcon4()
    {
        return $this->icon4;
    }

    /**
     * Sets the icon4 of the about.
     *
     * @param string $icon4
     * @return this
     */
    public function setIcon4($icon4)
    {
        $this->icon4 = (string)$icon4;

        return $this;
    }
    /**
     * Gets the link4 of the about.
     *
     * @return string
     */
    public function getLink4()
    {
        return $this->link4;
    }

    /**
     * Sets the link4 of the about.
     *
     * @param string $link4
     * @return this
     */
    public function setLink4($link4)
    {
        $this->link4 = (string)$link4;

        return $this;
    }
    /**
     * Gets the grid of the about.
     *
     * @return string
     */
    public function getGrid()
    {
        return $this->grid;
    }

    /**
     * Sets the grid of the about.
     *
     * @param string $grid
     * @return this
     */
    public function setGrid($grid)
    {
        $this->grid = (string)$grid;

        return $this;
    }
    /**
     * Gets the Bimg of the about.
     *
     * @return string
     */
    public function getBimg()
    {
        return $this->bimg;
    }

    /**
     * Sets the Bimg of the about.
     *
     * @param string $link
     * @return this
     */
    public function setBimg($bimg)
    {
        $this->bimg = (string)$bimg;

        return $this;
    }
}
