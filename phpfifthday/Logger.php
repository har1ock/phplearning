
<?php

interface Logger{
    public function log(string $level, string $message): void;
}

class FileLogger implements Logger{
    public function log(string $level, string $message): void{
        echo "Запис у лог $level : $message" . "<br>";
    }
}

class DatabaseLogger implements Logger{
    public function log(string $level, string $message): void{
        echo "Запис у базу даних $level : $message" . "<br>";
    }
}

class Application {
    private Logger $logger;

    public function __construct(Logger $logger){
        $this->logger = $logger;
    }

    public function run(string $msg): void{
        $this->logger->log("info", $msg);
    }
}