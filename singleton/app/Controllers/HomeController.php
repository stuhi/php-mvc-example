<?php
namespace App\Controllers;

use Mvc\Controller;
use App\Models\IndexModel;
use App\Models\AboutModel;

class HomeController extends Controller
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
    
    # GET: /home/index
    public function index()
    {
        $this->view(new IndexModel('Hello World'));
    }

    # GET: /home/about
    public function about()
    {
        $this->view(new AboutModel('About page'));
    }
}