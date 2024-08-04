<?php

require_once 'Observer.php';

$user1 = new User("Udin");
$user2 = new User("Maman");

$notifier = new BookNotifier();
$notifier->addObserver($user1);
$notifier->addObserver($user2);

$notifier->newBookArrived("New book has arrived!"); // Output: Udin received message: New book has arrived!
                                                    //         Maman received message: New book has arrived!
?>
