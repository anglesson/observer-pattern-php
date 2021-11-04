<?php

class Assinante implements Observer
{
    public $name;
    public function update(Subject $subject)
    {
        echo "*$this->name* Foi notificado como assinante desta revista.\n";
    }
}