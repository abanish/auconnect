<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish Chaudhary
 * Date: 6/29/14
 * Time: 7:59 AM
 */
class Controller_Welcome extends Controller
{

    public function action_index()
    {
        $this->template->content = View::factory('pages/welcome');


    }
}