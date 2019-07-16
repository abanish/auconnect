<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:52 AM
 */
class Model_Message{
    protected $_table='messages';
    public function add($content)
    {
        $data=array('content','date_published');
        return DB::insert($this->_table,$data)
            ->values(array($content,time()))
            ->execute();

    }
}