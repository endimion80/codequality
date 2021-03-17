<?php 

namespace App\Service\Backend;

#use Psr\Log\LoggerInterface;

class DataTableService
{
    private $name = "DataTableService";

    public function __construct()
    {
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }
}

?>