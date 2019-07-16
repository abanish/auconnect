<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Settings extends Controller_Template_Application
{
    public function before()
    {
        parent:: before();
        $this->template->title='SETTINGS';
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
        $avatar=ORM::factory('avatar');
        $avatar=$avatar->where('user_id','=',$user_id)->find();
        $this->template->content = View::factory('pages/settings')
            ->set('avatar',$avatar)
            ->set('user',$user);

    }
    public function action_updatestatus()
    {
        $user=Auth::instance()->get_user();
        $user_id=$user->id;
        $avatar=ORM::factory('avatar');
        $avatar=$avatar->where('user_id','=',$user_id)->find();
        if($_POST)
        {
            $avatar->user_id=$user_id;
            $avatar->status=$_POST['status'];
            $avatar->save();
        }
        HTTP::redirect('settings/index');

    }
    public function action_updatesocial()
    {
        $user=Auth::instance()->get_user();
        $user_id=$user->id;
        $avatar=ORM::factory('avatar');
        $avatar=$avatar->where('user_id','=',$user_id)->find();
        if($_POST)
        {
            $avatar->user_id=$user_id;
            $avatar->facebook=$_POST['facebook'];
            $avatar->twitter=$_POST['twitter'];
            $avatar->save();
        }
        HTTP::redirect('settings/index');
    }
    public function action_upload()
    {

        $error_message = NULL;
        $filename = NULL;

        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']))
            {
                $filename = $this->_save_image($_FILES['avatar']);
            }
        }
        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }
        $user=Auth::instance()->get_user();
        $avatar=ORM::factory('avatar');
        $user_id=$user->id;
        $avatar=$avatar->where('user_id','=',$user_id)->find();



        $avatar->user_id=$user_id;
        $avatar->avatar=$filename;
        $avatar->save();





        HTTP::redirect('settings/index');
    }

    protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }

        $directory = DOCROOT.'uploads/';
        $directory_thumb=DOCROOT.'thumbs/';

        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';

            Image::factory($file)
                ->resize(300, 300, Image::AUTO)
                ->save($directory.$filename);
            Image::factory($file)
                ->resize(75,75, Image::AUTO)
                ->save($directory_thumb.$filename);

            // Delete the temporary file
            unlink($file);
            return $filename;
        }

        return FALSE;
    }
}


