<?php

namespace notification;

class Notification
{
    protected $config;
    protected $creator;

    public function __construct($creator, $config)
    {
        /**
         * @var $creator NotificationCreator
         */
        $this->creator = $creator;
        $this->config = $config;
    }

    public function send($message)
    {
        foreach ($this->config['notification'] as $notification) {
            /**
             * @var $notify type\AbstractType
             */
            $notify = $this->creator->create($notification);
            $notify->config = $this->config;
            $notify->message = $message;
            $notify->send();
        }
    }
}