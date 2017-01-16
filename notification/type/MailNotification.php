<?php
namespace notification\type;

use notification\type\NotificationType;
use notification\type\AbstractType;

class MailNotification extends AbstractType implements NotificationType {

    public function send() {
        echo '\''. $this->message . '\' mail send to ' . $this->config['mail'] .'</br>';;
    }
}