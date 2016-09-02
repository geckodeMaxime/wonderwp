<?php
/**
 * Created by PhpStorm.
 * User: jeremydesvaux
 * Date: 17/08/2016
 * Time: 09:53
 */

namespace WonderWp\Assets;

abstract class AbstractAssetService implements AssetServiceInterface{

    public static $PUBLICASSETSGROUP = 'app';
    public static $ADMINASSETSGROUP = 'admin';

    protected $_assets = array();

    public function __construct()
    {
        $this->_assets = array();
    }

}