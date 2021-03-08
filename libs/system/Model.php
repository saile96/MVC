<?php
namespace libs\system;
use libs\system\Model; 
class Model
{
    protected $entityManager;

    public function __Construct()
    {
        require_once "bootstrap.php";
        $this->entityManager = $entityManager;
    }
}


?>