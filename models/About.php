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
     * The Icon of the about.
     *
     * @var string
     */
    protected $icon;
    /**
     * The link of the about.
     *
     * @var string
     */
    protected $link;

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
     * Gets the icon of the about.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets the icon of the about.
     *
     * @param string $icon
     * @return this
     */
    public function setIcon($icon)
    {
        $this->icon = (string)$icon;

        return $this;
    }
    /**
     * Gets the link of the about.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link of the about.
     *
     * @param string $link
     * @return this
     */
    public function setLink($link)
    {
        $this->link = (string)$link;

        return $this;
    }
}
