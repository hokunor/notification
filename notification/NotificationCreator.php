<?php
namespace notification;

use notification\type\MailNotification;
use notification\type\SmsNotification;

class NotificationCreator
{
    public function create($type)
    {
        switch ($type) {
            case 'sms':
                return new SmsNotification();
                break;
            case 'mail':
                return new MailNotification();
                break;
            default:
                return new MailNotification();
                break;
        }
    }
}