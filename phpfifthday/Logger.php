
<?php

interface Logger{
    public function log(string $level, string $message): void;
}

class 