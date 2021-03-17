<?php 

namespace App\Service\EventsAndSync;

#use Psr\Log\LoggerInterface;

class WebhookCustomService
{
    private $name = "WebhookCustomService";

    public function __construct()
    {
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }
}

?>