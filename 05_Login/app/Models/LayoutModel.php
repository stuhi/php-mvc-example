<?php
namespace App\Models;

use Mvc\Model;
use Mvc\Session;

class LayoutModel extends Model
{
    public string $_html;
    public bool $_isAuth;

    public function __construct(string $_html)
    {
        $this->_layout = '../app/Views/_Layout.php';
        $this->_html = $_html;
        $this->_isAuth = Session::isAuth();
    }
}