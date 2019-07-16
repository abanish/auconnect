<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Abanish
 * Date: 3/7/2015
 * Time: 7:03 PM
 */
class HTTP_Exception_401 extends Kohana_HTTP_Exception_401 {

    /**
     * Generate a Response for the 401 Exception.
     *
     * The user should be redirect to a login page.
     *
     * @return Response
     */
    public function get_response()
    {
        $response = Response::factory()
            ->status(401)
            ->headers('Location', URL::site('user/enter'));
        return $response;
    }
}