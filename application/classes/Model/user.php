<!--user model to work with the user table-->
<?php defined('SYSPATH') or die('No direct script access.');
class Model_User extends Model_Auth_User
{
    protected $_has_many = array(
        'user_tokens' => array('model' => 'user_token'),
        'roles' => array('model' => 'role', 'through'
        => 'roles_users'),
        /**adding talk model relationship to add the ability to use the message object from a user*/
        'talk' => array('model' => 'talk'),
        'reply' =>array('model'=>'reply'),
        'mart' =>array('model'=>'mart')
    );
    protected $_has_one=array('avatar'=>array());
}