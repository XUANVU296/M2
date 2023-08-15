<?php
class Configuration {
    public static $siteName = "My Website"; // Static property

    public static function getSiteName() {
        return self::$siteName;
    }
}

echo Configuration::$siteName . "<br>"; // In ra: My Website

Configuration::$siteName = "New Website Name";

echo Configuration::getSiteName(); // In ra: New Website Name