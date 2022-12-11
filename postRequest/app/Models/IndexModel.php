<?php
namespace App\Models;

use Mvc\Model;

class IndexModel extends Model
{
    public string $message;

    public function __construct(string $message)
    {
        $this->_layout = '../app/Views/Index.php';
        $this->message = $message;
    }
}