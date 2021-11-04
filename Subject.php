<?php

interface Subject {
    // Attach an observer to the subject.
    public function attach(Observer $observer);

    // Detach an observer from the subject.
    public function detach(Observer $observer);

    // Notify all observers about an event.
    public function notify();
}