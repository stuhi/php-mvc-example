<?php
namespace App\Models;

class AboutModel extends LayoutModel
{
    public string $message;

    public function __construct(string $message)
    {        
        parent::__construct('../app/Views/About.php');
        $this->message = $message;
    }
}