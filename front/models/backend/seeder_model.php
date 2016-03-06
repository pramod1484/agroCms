<?php

/**
 * Created by PhpStorm.
 * User: Pramod
 * Date: 03-02-2016
 * Time: 00:23
 */
class seeder_model extends  MY_Model
{
    protected $_tab_name='dailydata';
    protected $_pri_key='Id';
    protected $_pri_filter='intval';
    protected $_order_by='created';
    public $_rules=array();
    protected $_timestamp=TRUE;
    public $language=array();

    function __construct() {
        parent::__construct();
    }
}