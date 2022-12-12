<?php
namespace App\Models;

class IndexModel extends LayoutModel
{
    public string $message;

    public function __construct(string $message)
    {
        parent::__construct('../app/Views/Index.php');
        $this->message = $message;
    }
}