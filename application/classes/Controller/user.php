<?php defined('SYSPATH') or die('No direct script access.');

# application/classes/Controller/User.php
class Controller_User extends Controller_Template
{
    public $template = 'start';

    public function before() {
        $this->response->headers('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
        $this->response->headers('Pragma: no-cache'); // HTTP 1.0.
        $this->response->headers('Expires: 0'); // Proxies.
        parent::before();
        $this->template->title='auconnect';
        if ($this->auto_render) {
            // Initialize empty values

            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }
    public function after() {
        if ($this->auto_render) {
            $styles = array(
                'bootstrap.min',
                'enter'
            );
            $scripts = array(
                'jquery',
                'bootstrap.min'

            );
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );


        }
        $this->response->headers('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
        $this->response->headers('Pragma: no-cache'); // HTTP 1.0.
        $this->response->headers('Expires: 0'); // Proxies.
        parent::after();
    }
    public function action_index()
    {
        $errors=$message=NULL;
        $message="Your account has been successfully created. Please Enter the site.";
        $user = Auth::instance()->get_user();
        if($user) {
           HTTP::redirect('talk');
        }
        $this->template->content=View::factory('pages/enter')

        ->bind('errors',$errors)
        ->bind('message',$message);

    }
     public function action_ticket()
     {
         $user = Auth::instance()->get_user();
         if ($user)
             HTTP::redirect('talk');
        $message= $errors = NULL;
         $this->template->content = View::factory('pages/ticket')
             ->bind('errors', $errors)
             ->bind('message', $message);

         if ($_POST) {

             $validation = Validation::factory($this->request->post())
                 ->rule('username', 'not_empty')
                 ->rule('username', 'max_length', array(':value', 16))
                 ->rule('username', 'regex', array(':value', '/^[a-z_.]++$/iD'))
                 ->rule('password', 'not_empty')
                 ->rule('password', 'min_length', array(':value', 8))
                 ->rule('confirm', 'matches', array(':validation', ':field', 'password'));

try {
    if ($validation->check()) {
        // Data has been validated, register the user
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $department = $_POST['department'];

        $model = ORM::factory('user');
        $model->values(array(
            'username' => $username,
            'fullname' => $fullname,
            'email' => $email,
            'password' => $password,
            'department' => $department,
            'date' => time(),
        ));
        $model->save();
        $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
        $model->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());
        // Always redirect after a successful POST to prevent refresh warnings
       HTTP::redirect('user/index');


    }

}
catch(ORM_Validation_Exception $e){
    $errors=$e;
}

// Validation failed, collect the errors
             $errors = $validation->errors('registration');

             // Display the registration form
             $this->template->content = View::factory('pages/ticket')
                 ->bind('errors', $errors)
                 ->bind('message', $message);
         }
     }

     public function action_enter()
     {
       $errors=$message=NULL;
        $user = Auth::instance()->get_user();

        if ($user)
            HTTP::redirect('talk/index'); # if logged in, redirect to login page

        $this->template->content = View::factory('pages/enter')

        ->set('errors',$errors)
        ->set('message',$message);

        if($_POST) {

            Auth::instance()->login($_POST['username'], $_POST['password'] );


            if (Auth::instance()->logged_in()) {
                $user = Auth::instance()->get_user();
                $userId = $user->id;

                 HTTP::redirect('talk');
            }
    $errors="Incorrect display name or password. Please try again with correct display name and password.";
    }



        $this->template->content = View::factory('pages/enter')
            ->bind('errors',$errors)
        ->bind('message',$message);
    }


    public function action_exit()
    {
        Auth::instance()->logout();

          HTTP::redirect('user/enter');
    }
} // End Controller_Dbauth

