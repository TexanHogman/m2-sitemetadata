<?php
/**
 * Created by PhpStorm.
 * User: rhogge
 * Date: 1/12/2015
 * Time: 8:53 PM
 */

namespace TexanHogman\SiteMetaData\Api;


interface SiteMetaDataManagementInterface {

    /**
     * Retrieve all modules
     *
     * @return \TexanHogman\SiteMetaData\Api\Data\ModuleInfoInterface;
     */
    public function getModuleList();

}