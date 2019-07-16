<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Talk extends Controller_Template_Application{
    public function before()
    {
        parent:: before();
        $this->template->title='TALK';
        $user=Auth::instance()->get_user();
        if(!$user)
        {
            HTTP::redirect('user/enter');
        }
    }
    public function action_index()
    {
        $activeuser = Auth::instance()->get_user();
        if ($activeuser) {
            $i = $this->request->param('id');
            $offset = $i * 10 - 10;
            $talk = ORM::factory('talk');
            $count = $talk->count_all();
            $count = $count / 10;
            $user = new Model_User;
            $talk = $talk->limit(10)->offset($offset)->order_by('id', 'DESC')->find_all();
            $this->template->content = View::factory('pages/talk')
                ->set('talks', $talk)
                ->set('activeuser', $activeuser)
                ->set('user', $user)
                ->set('i', $i + 1)
                ->set('count', $count);
        }
        else{
            HTTP::redirect('user/enter');
        }
    }
    public function action_add()
    {
        $user=Auth::instance()->get_user();
        if($user) {
            $talk = new Model_Talk;
            if (isset($_POST['topic']) && isset($_POST['description'])) {
                $talk->user_id = $user->id;
                $talk->topic = $_POST['topic'];
                $talk->description = $_POST['description'];
                $talk->date = time();
                $talk->save();

            }
            HTTP::redirect('talk');
        }
        else{
            HTTP::redirect('user/enter');
        }
    }



}