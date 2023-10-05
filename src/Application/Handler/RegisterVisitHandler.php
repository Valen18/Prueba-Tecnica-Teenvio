<?php

namespace App\Application\Handler;

use App\Application\Command\RegisterVisitCommand;
use App\Entity\Visit;
use Doctrine\ORM\EntityManagerInterface;

class RegisterVisitHandler {
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke(RegisterVisitCommand $command)
    {
        $visit = new Visit();
        $visit->setTimestamp($command->getTimestamp());

        $this->entityManager->persist($visit);
        $this->entityManager->flush();
    }
}
