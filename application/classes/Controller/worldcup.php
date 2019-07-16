<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Worldcup extends Controller_Template_Application{
    public function before()
    {
        parent:: before();
        $this->template->title='WORLD CUP';
        $user=Auth::instance()->get_user();
        if(!$user)
        {
            HTTP::redirect('user/enter');
        }
    }
    public function action_index()
    {

        $this->template->content = View::factory('pages/worldcup');
    }
}