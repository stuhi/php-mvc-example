<?php
namespace App\Controllers;

use Mvc\Controller;
use App\Models\IndexModel;
use App\Models\AboutModel;

class HomeController extends Controller
{
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