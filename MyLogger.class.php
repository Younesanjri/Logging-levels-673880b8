<?php
class MyLogger 
{
    public function warning($message) {
        $this->log("WARNING: " . $message);
    }

    public function error($message) {
        $this->log("ERROR: " . $message);
    }

    public function info($message) {
        $this->log("INFO: " . $message);
    }

    public function debug($message) {
        $this->log("DEBUG: " . $message);
    }

    private function log($message) {
        print($message);
    }
}

$logger = new MyLogger();

$logger->error("test")
?>