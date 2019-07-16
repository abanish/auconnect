<?php defined('SYSPATH') or die('No direct script access.');
class Model_Reply extends ORM {
    //adding relationship from our talk model back to the user model
    protected $_belongs_to=array('talk'=>array(
        'model'=>'talk',
        'foreign_key'=>'talk_id'
    ),
     'user' =>array('model'=>'user'));
    protected $_table='replies';

}