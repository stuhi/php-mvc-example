<?php
namespace App\Controllers;

use Mvc\Controller;
use Mvc\Session;
use Mvc\Attributes\AUTH;
use Mvc\Attributes\NOTAUTH;
use App\Models\LoginModel;

class AccountController extends Controller
{
    private static $controller;

    private function __construct()
    {
        parent::__construct();
    } 

    public static function getController() : self
    {
        if (self::$controller === null) self::$controller = new self();
        return self::$controller;
    }

    # GET: /account/login
    #[NOTAUTH]
    public function login()
    {
        $this->view(new LoginModel());
    }
    
    # POST: /account/login
    #[NOTAUTH]
    public function loginPost(string $username, string $password)
    {
        if ($username == 'admin' && $password == 'password')
        {
            Session::signIn();
            $this->redirect('/');
        }
        else
        {
            $this->view(new LoginModel('ERROR'));
        }
    }

    # GET: /account/logout
    #[AUTH]
    public function logout()
    {
        Session::signOut();
        $this->redirect('/');
    }
}