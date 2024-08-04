<?php

require_once 'RequestHandler.php';

$request = new Request();
$request->authenticate();

$authHandler = new AuthHandler();
$logHandler = new LoggingHandler();

$authHandler->setNextHandler($logHandler);

$authHandler->handle($request); // Output: User authenticated.
                                //         Logging request.
?>
