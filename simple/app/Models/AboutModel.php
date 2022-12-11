<?php
namespace App\Models;

use Mvc\Model;

class AboutModel extends Model
{
    public string $message;

    public function __construct(string $message)
    {
        $this->_layout = '../app/Views/About.php';
        $this->message = $message;
    }
}