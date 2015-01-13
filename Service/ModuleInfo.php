<?php
/**
 * Created by PhpStorm.
 * User: rhogge
 * Date: 1/12/2015
 * Time: 9:24 PM
 */

namespace TexanHogman\SiteMetaData\Service;


use TexanHogman\SiteMetaData\Api\Data\ModuleInfoInterface;

class ModuleInfo implements ModuleInfoInterface {
    /**
     * @var string
     */
    protected $name = null;

    /**
     * Get module name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}