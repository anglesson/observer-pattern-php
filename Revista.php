<?php
include_once 'Observer.php';
include_once 'Subject.php';

class Revista implements Subject
{
    public $assinantes;

    public function __construct()
    {
        $this->assinantes = [];
    }

    public function attach(Observer $observer)
    {
        array_push($this->assinantes, $observer);
    }

    public function detach(Observer $observer)
    {
        $indiceDoObserver = array_search($observer, $this->assinantes, true);
        array_splice($this->assinantes[$indiceDoObserver]);
    }

    public function notify()
    {
        foreach ($this->assinantes as $assinante) {
            $assinante->update($this);
        }
    }
}