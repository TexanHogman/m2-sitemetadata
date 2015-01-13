<?php
/**
 * Created by PhpStorm.
 * User: rhogge
 * Date: 1/12/2015
 * Time: 8:58 PM
 */

namespace TexanHogman\SiteMetaData\Service;

use TexanHogman\SiteMetaData\Api\SiteMetaDataManagementInterface;

class SiteMetaDataManagement implements SiteMetaDataManagementInterface {

    public function __construct() {
    }
    /**
     * Retrieve all modules
     *
     * @return \TexanHogman\SiteMetaData\Api\Data\ModuleInfoInterface[];
     */
    public function getModuleList()
    {
        return null;
    }

}