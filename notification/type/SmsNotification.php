<?php

namespace notification\type;

use notification\type\NotificationType;
use notification\type\AbstractType;

class SmsNotification extends AbstractType implements NotificationType
{

    public function send()
    {
        echo '\''. $this->message . '\' sms send to ' . $this->config['phone'] .'</br>';
    }
}