
<?php 

interface Notifier {
    public function send(string $to, string $message): void;   
}

class EmailNotifier implements Notifier {
    public function send (string $to, string $message): void{
        echo "Email send to $to: $message";
    }
}

class SmsNotifier implements Notifier {
    public function send (string $to, string $message): void{
        echo "SMS send to $to: $message";

    }
}
class AlertService {
    private Notifier $notifier;

    public function __construct(Notifier $notifier){
        $this->notifier = $notifier;
    }

    public function critical(string $msg): void{
        $this->notifier->send("admin@example.com", $msg);
    }
}
    ?>


