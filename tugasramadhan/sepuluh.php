<?php
// Kelas Logger buat nyimpen log aksi
class Logger {
    private $log = [];

    public function logAction($userType, $username, $action) {
        $timestamp = $this->getTimestamp();
        $newLog = "[{$timestamp}] {$userType} ({$username}): {$action}";

        // Menyimpan log dari terbaru ke terlama
        $newLogList = [$newLog];
        for ($i = 0; isset($this->log[$i]); $i++) {
            $newLogList[$i + 1] = $this->log[$i];
        }

        $this->log = $newLogList;
    }

    public function showLogs() {
        for ($i = 0; isset($this->log[$i]); $i++) {
            echo $this->log[$i] . "\n";
        }
    }

    private function getTimestamp() {
        $h = date("H");
        $m = date("i");
        $s = date("s");
        return "{$h}:{$m}:{$s}";
    }
}

// Kelas dasar User
class User {
    protected $username;
    protected $userType = "User";
    protected $messages = [];
    protected $logger;

    public function __construct($username, $logger) {
        $this->username = $username;
        $this->logger = $logger;
    }

    public function uploadMessage($message) {
        $newMessages = [$message];
        for ($i = 0; isset($this->messages[$i]); $i++) {
            $newMessages[$i + 1] = $this->messages[$i];
        }
        $this->messages = $newMessages;
        $this->logger->logAction($this->userType, $this->username, "Uploaded message: '$message'");
    }

    public function showMessages() {
        for ($i = 0; isset($this->messages[$i]); $i++) {
            echo "{$i}. {$this->messages[$i]}\n";
        }
    }
}

class Moderator extends User {
    protected $userType = "Moderator";

    public function deleteMessage($index) {
        if (!isset($this->messages[$index])) {
            echo "Message not found!\n";
            return;
        }

        $newMessages = [];
        for ($i = 0, $j = 0; isset($this->messages[$i]); $i++) {
            if ($i != $index) {
                $newMessages[$j] = $this->messages[$i];
                $j++;
            }
        }
        $deletedMessage = $this->messages[$index];
        $this->messages = $newMessages;

        $this->logger->logAction($this->userType, $this->username, "Deleted message: '$deletedMessage'");
    }
}

class Admin extends Moderator {
    protected $userType = "Admin";

    public function pinMessage($index) {
        if (!isset($this->messages[$index])) {
            echo "Message not found!\n";
            return;
        }

        $pinnedMessage = $this->messages[$index];

        // Menggeser pesan pinned ke urutan pertama
        $newMessages = [$pinnedMessage];
        for ($i = 0, $j = 1; isset($this->messages[$i]); $i++) {
            if ($i != $index) {
                $newMessages[$j] = $this->messages[$i];
                $j++;
            }
        }
        $this->messages = $newMessages;

        $this->logger->logAction($this->userType, $this->username, "Pinned message: '$pinnedMessage'");
    }
}

$logger = new Logger();

$user = new User("Fikri", $logger);
$moderator = new Moderator("Ella", $logger);
$admin = new Admin("Zahra", $logger);

$user->uploadMessage("Hello, world!");
$user->uploadMessage("Ini pesan kedua.");
$user->showMessages();
echo "\n";

$moderator->uploadMessage("Pesan Pertama moderator");
$moderator->showMessages();
$moderator->deleteMessage(0);
$moderator->showMessages();
echo "\n";

$admin->uploadMessage("Pesan penting dari admin");
$admin->showMessages();
$admin->pinMessage(0);
$admin->showMessages();
echo "\n";

$logger->showLogs();
?>
