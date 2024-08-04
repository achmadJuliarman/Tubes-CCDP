<?php

abstract class RequestHandler {
    protected $nextHandler;

    public function setNextHandler(RequestHandler $handler) {
        $this->nextHandler = $handler;
    }

    public function handle($request) {
        if ($this->nextHandler) {
            $this->nextHandler->handle($request);
        }
    }
}

class AuthHandler extends RequestHandler {
    public function handle($request) {
        if ($request->isAuthenticated()) {
            echo "User authenticated.<br>";
            parent::handle($request);
        } else {
            echo "Authentication failed.<br>";
        }
    }
}

class LoggingHandler extends RequestHandler {
    public function handle($request) {
        echo "Logging request.<br>";
        parent::handle($request);
    }
}

class Request {
    private $authenticated = false;

    public function authenticate() {
        $this->authenticated = true;
    }

    public function isAuthenticated() {
        return $this->authenticated;
    }
}
?>
