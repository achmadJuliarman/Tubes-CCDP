<?php

include_once 'BookCategory.php';

class BookCategoryFactory {
    private static $categories = [];

    public static function getCategory($name) {
        if (!isset(self::$categories[$name])) {
            self::$categories[$name] = new BookCategory($name);
        }
        return self::$categories[$name];
    }
}

?>
