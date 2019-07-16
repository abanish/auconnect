<?php defined('SYSPATH') or die('No direct script access.');
class Model_Avatar extends ORM{
    protected $_belongs_to = array('user'=>array());
    protected $_table='avatars';
}