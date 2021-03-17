<?php 

namespace App\Service\EventsAndSync;

use  App\Service\EventsAndSync\WebhookCustomService;

class WebhookService
{
    private $name = "WebhookService";

    public function __construct(WebhookCustomService $webhookCustomService)
    {
        $this->webhookCustomService = $webhookCustomService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name . " " . $this->webhookCustomService->getName() ;
    }
}

?>