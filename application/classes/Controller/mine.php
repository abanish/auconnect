<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Mine extends Controller_Template_Application{
    public function before()
    {
        parent:: before();
        $this->template->title='MINE';
        $user=Auth::instance()->get_user();
        if(!$user)
        {
            HTTP::redirect('user/enter');
        }
    }
    public function action_index()
    {
        $user=Auth::instance()->get_user();
        $user_id=$user->id;

        $talk=new Model_Talk;
        $mart=new Model_Mart;
        $talks=$talk->where('user_id','=',$user_id)->order_by('id','DESC')->find_all();
        $mart=$mart->where('user_id','=',$user_id)->order_by('id','DESC')->find_all();



        $this->template->content=View::factory('pages/mine')
        ->set('talk',$talks)
        ->set('mart',$mart)
        ->set('user',$user);
    }
    public function action_deletemytalk()
    {
        $user=Auth::instance()->get_user();
        $id=$this->request->param('id');
        $talk=new Model_Talk;
        $deletetalk=$talk->where('id','=', $id)->find();
        $deletetalk->delete();
        HTTP::redirect('mine');
    }
    public function action_deletemymart()
    {
        $user=Auth::instance()->get_user();
        $mart_id=$this->request->param('id');
        $mart=new Model_Mart;
        $mart=$mart->where('id','=',$mart_id)->find();
        $mart->delete();
        HTTP::redirect('mine');
    }

}