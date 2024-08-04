<?php

interface Observer {
    public function update($message);
}

interface Observable {
    public function addObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}

class User implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($message) {
        echo $this->name . " received message: " . $message . "<br>";
    }
}

class BookNotifier implements Observable {
    private $observers = [];
    private $message;

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $this->observers = array_filter($this->observers, function($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->message);
        }
    }

    public function newBookArrived($message) {
        $this->message = $message;
        $this->notifyObservers();
    }
}
?>
