<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:52 AM
 */
class Model_Talk extends ORM {
    //adding relationship from our talk model back to the user model
    protected $_has_many= array('reply'=> array());
    protected $_belongs_to=array(
        'user' =>array('model'=>'user'));
    protected $_table='talks';
}