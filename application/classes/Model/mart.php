<?php defined('SYSPATH') or die('No direct script access.');
class Model_Mart extends ORM{
    protected $_table='marts';
    protected $_belongs_to=array(
        'user' =>array('model'=>'user'));
}