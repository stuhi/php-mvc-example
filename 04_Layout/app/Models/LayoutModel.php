<?php
namespace App\Models;

use Mvc\Model;

class LayoutModel extends Model
{
    public string $_html;

    public function __construct(string $_html)
    {
        $this->_layout = '../app/Views/_Layout.php';
        $this->_html = $_html;
    }
}