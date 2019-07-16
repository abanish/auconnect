<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Topic extends Controller_Template_Application
{
    public function before()
    {
        parent:: before();
        $this->template->title='TOPIC';
        $user=Auth::instance()->get_user();
        if(!$user)
        {
            HTTP::redirect('user/enter');
        }
    }
    public function action_id()
    {
        $id = $this->request->param('id');
        $talk = ORM::factory('talk');
        $user = ORM::factory('user');

        $user = Auth::instance()->get_user();
        $user_id = $user->id;
        $talk = $talk->where('id', '=', $id)->find();


        $reply = new Model_Reply;
        $replies = $reply->where('talk_id', '=', $id)->find_all();
        $this->template->content = View::factory('pages/topic')
            ->set('topic', $talk)
            ->set('replies', $replies)
            ->set('user', $user);

    }

    public function action_reply()
    {


        $user = Auth::instance()->get_user();
        $id = $this->request->param('id');
        $reply = ORM::factory('reply');
        $talk = ORM::factory('talk');
        $reply->user_id = $user->id;

        $comment = $_POST['text'];
        $reply->reply = $comment;

        $reply->talk_id = $id;
        $reply->date = time();
        $reply->save();
        $replies = $talk->where('id', '=', $id)->find();
        $value = $replies->replies;
        $value = $value + 1;
        $replies->replies = $value;
        $replies->save();
        HTTP::redirect('topic/id/'.$id);

    }


}