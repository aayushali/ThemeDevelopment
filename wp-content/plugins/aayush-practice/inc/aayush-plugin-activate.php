<?php
/**
 * @package AayushPlugin
 * */

class AayushPluginActivate {

    public static function activate() {
        flush_rewrite_rules();
    }
}