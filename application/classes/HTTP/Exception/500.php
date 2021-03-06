<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

    public function get_response()
    {
        $view = View::factory('errors/500');

// Remembering that `$this` is an instance of HTTP_Exception_404
        $view->message = $this->getMessage();

        $response = Response::factory()
            ->status(500)
            ->body($view->render());

        return $response;
    }
}