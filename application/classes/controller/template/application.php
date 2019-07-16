<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_Template_Application extends Controller_Template{
    public function before() {
        parent::before();
        $this->response->headers('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
        $this->response->headers('Pragma: no-cache'); // HTTP 1.0.
        $this->response->headers('Expires: 0'); // Proxies.
        $user = Auth::instance()->get_user();
        if ($this->auto_render) {
            // Initialize empty values
            $this->template->user=$user;
            $this->template->content = '';
            $this->template->title='';
            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }
    public function after() {
        if ($this->auto_render) {
            $styles = array(
                'bootstrap.min',
                'main'
            );
            $scripts = array(
                'jquery',
                'bootstrap.min',
                'jquery.form.min',
                'main'
            );
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );

        }
        parent::after();
    }
}