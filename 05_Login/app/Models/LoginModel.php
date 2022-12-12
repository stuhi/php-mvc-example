<?php
namespace App\Models;

class LoginModel extends LayoutModel
{
    public string $error;

    public function __construct(string $error = '')
    {
        parent::__construct('../app/Views/Login.php');
        $this->error = $error;
    }
}