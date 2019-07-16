<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Mart extends Controller_Template_Application{
    public function before()
    {
        parent:: before();
        $this->template->title='MART';
        $user=Auth::instance()->get_user();
        if(!$user)
        {
            HTTP::redirect('user/enter');
        }
    }
    public function action_index()
    {
        $i=$this->request->param('id');
        $mart=ORM::factory('mart');
        $offset=$i*10-10;
        $user=Auth::instance()->get_user();
        $count=$mart->count_all();
        $count=$count/10;
        $mart=$mart->limit(10)->offset($offset)->order_by('id','DESC')->find_all();
        $this->template->content=View::factory('pages/mart')
            ->set('mart',$mart)
        ->set('user',$user)
            ->set('i',$i+1)
            ->set('count',$count);
    }
    public function action_add()
    {
        if (Request::initial()->is_ajax()) {

            $this->auto_render = false;


            $user = Auth::instance()->get_user();
            $mart = new Model_Mart;
            $user_id = $user->id;

            $this->template->content = View::factory('pages/mart');
            if (isset($_POST['title']) && isset($_POST['description'])) {


                $mart->title = $_POST['title'];
                $mart->description = $_POST['description'];
                $mart->price = $_POST['price'];
                $mart->contact = $_POST['contact'];
                $mart->user_id = $user_id;
                $mart->date = time();
                $mart->save();
            }
        }
    }
    public function action_contact()
    {
        $id=$this->request->param('id');
        $user=Auth::instance()->get_user();
        $mart=ORM::factory('mart');
        $mart=$mart->where('id','=',$id)->find();
        $this->template->content=View::factory('pages/contact')
        ->set('mart',$mart)
        ->set('user',$user);
    }
}