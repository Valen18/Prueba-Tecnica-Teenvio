<?php

namespace App\Controller;

use App\Application\Command\RegisterVisitCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class VisitController extends AbstractController
{
    private $commandBus;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @Route("/visit")
     */
    public function recordVisit(): Response
    {
        $timestamp = new \DateTime();
        $this->commandBus->dispatch(new RegisterVisitCommand($timestamp));
        return new Response('Visit recorded!', 200);
    }
}
