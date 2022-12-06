<?php
/**
 * @copyright Slipi
 * @package ilch
 */

namespace Modules\About\Config;

use Ilch\Config\Install;

class Config extends Install
{
    /**
     * @var array
     */
    public $config = [
        'key' => 'about',
        'version' => '1.0.0',
        'icon_small' => 'fa-question-circle',
        'author' => 'Slipi',
        'link' => 'https://ilch.de',
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

    /**
     * @return void
     */
    public function install()
    {
      $this->db()->queryMulti($this->getInstallSql());
    }

    /**
     * @return string
     */
    public function getInstallSql(): string
    {
        return	'
            CREATE TABLE IF NOT EXISTS `[prefix]_about` (
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

    /**
     * @return void
     */
    public function uninstall()
    {
        $this->db()->drop('about', true);
    }

    /**
     * @param string $installedVersion
     * @return string
     */
    public function getUpdate(string $installedVersion): string
    {
        switch ($installedVersion) {
            case "1.0.0":
                // update zu 1.?.?
                /*

                */

                // no break
        }
        return 'Update function executed.';
    }
}
