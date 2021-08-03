<?php
/**
 * @package AayushPlugin
 * */

class AayushPluginDeactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}