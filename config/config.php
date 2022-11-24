<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Modules\About\Config;

class Config extends \Ilch\Config\Install
{
  public $config = [
      'key' => 'about',
      'version' => '1.0.0',
      'icon_small' => 'fa-question-circle',
      'author' => 'Slipi',
      'link' => 'http://ilch.de',
      'languages' => [
          'de_DE' => [
              'name' => 'About',
              'description' => 'Hier können sie Sich/Clan/Community vorstellen',
          ],
          'en_EN' => [
              'name' => 'About',
              'description' => 'Here you can introduce yourself/clan/community',
          ],
      ],
      'boxes' => [
          'about' => [
              'de_DE' => [
                  'name' => 'About'
              ],
              'en_EN' => [
                  'name' => 'About'
              ]
          ]
      ],
      'ilchCore' => '2.1.43',
      'phpVersion' => '5.6'
  ];

    public function install()
    {
      $this->db()->queryMulti($this->getInstallSql());
    }

    public function uninstall()
    {
      $this->db()->queryMulti('DROP TABLE `[prefix]_about`;');
    }

    public function getInstallSql()
  {
    return	'CREATE TABLE IF NOT EXISTS `[prefix]_about` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `grid` TINYINT(1) NOT NULL,
            `titel` MEDIUMTEXT NOT NULL,
            `img` VARCHAR(255) NOT NULL,
            `text` MEDIUMTEXT NOT NULL,
            `icon1` MEDIUMTEXT NOT NULL,
            `link1` VARCHAR(255) NOT NULL,
            `icon2` MEDIUMTEXT NOT NULL,
            `link2` VARCHAR(255) NOT NULL,
            `icon3` MEDIUMTEXT NOT NULL,
            `link3` VARCHAR(255) NOT NULL,
            `icon4` MEDIUMTEXT NOT NULL,
            `link4` VARCHAR(255) NOT NULL,
            `bimg` MEDIUMTEXT NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1';
  }

  public function getUpdate($installedVersion)
  {

  }
}
