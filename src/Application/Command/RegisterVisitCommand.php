<?php 

namespace App\Application\Command;

class RegisterVisitCommand {
    private $timestamp;
    
    public function __construct($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
